<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class My_pageController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        $user_history = DB::table('company')->find($id);
        return view('my_page',[
            "my_user" => $user,
            "my_history" => $user_history]);
    }
    public function my_page_update(Request $request)
    {
        if($request->hasFile('top_image')) {
            $id = Auth::id();
            $photo_path = $request->file('top_image')->store('public/top_file');
            $top_image_pass2 = basename($photo_path);
            // DBの対象カラムを更新する
            $affected = DB::table('users')
                ->where('id', $id)
                ->update(['profile_photo_path' => $top_image_pass2]);
            // 画像に表示させる
            return redirect("/my_page2")->with([
                "message" => "マイページ画像を変更しました。",
                "top_image_pass" => $top_image_pass2,
            ]);
        }
        else{
            return redirect("/my_page2");
        }
    }
}