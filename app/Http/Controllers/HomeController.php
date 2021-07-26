<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function redirectIndex()
    {
        return redirect(route('home'));
    }

    public function index(Request $request)
    {
        $q = $request->input('q'); //フォームの入力値を取得
        $radio = $request->input('equipment');
        //検索キーワードが空の場合
        if (empty($q)) {
            $users = User::paginate(0);  //全ユーザーを10件/ページで表示

        //検索キーワードが入っている場合
        } else {

            var_dump($radio);
            exit;
            $_q = str_replace(' ', ' ', $q);  //全角スペースを半角に変換
            $_q = preg_replace('/\s(?=\s)/', '', $_q); //連続する半角スペースは削除
            $_q = trim($_q); //文字列の先頭と末尾にあるホワイトスペースを削除
            $_q = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $_q); //円マーク、パーセント、アンダーバーはエスケープ処理
            $keywords = array_unique(explode(' ', $_q)); //キーワードを半角スペースで配列に変換し、重複する値を削除

            $query = User::query();
            foreach($keywords as $keyword) {
                //1つのキーワードに対し、名前かメールアドレスのいずれかが一致しているユーザを抽出
                //キーワードが複数ある場合はAND検索
                $query->where(function($_query) use($keyword){
                    $_query->where('name', 'LIKE', '%'.$keyword.'%')
                            ->orwhere('email', 'LIKE', '%'.$keyword.'%');
                });
            }
            $users = $query->paginate(10); //検索結果のユーザーを10件/ページで表示
        }
        return view('home', compact('users', 'q'));
    }
}
?>