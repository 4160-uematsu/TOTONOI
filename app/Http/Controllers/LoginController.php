<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Companyusers;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.Company_login');

    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email','password');
        
        $user = Companyusers::where('email', '=',  $credentials["email"])->first();
        if($user === null) {
            $response = "ログイン失敗！";
            return view('welcome', compact('response'));
        }else{
            $response = "ログイン完了しました！";
            return view('welcome', compact('response'));
        }

        // if (DB::table('Companyusers')->where('email', $credentials["email"] )->exists()) {
        //     if (DB::table('Companyusers')->where('password', $credentials["password"] )->exists()) {
        //         $response = "ログイン完了しました！";
        //         return view('company_home', compact('response'));
        //     }
        // }
        // return back()->withErrors([
        // 'message' => 'メールアドレスまたはパスワードが正しくありません。',
        // ]);
    }

    public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }
}

?>
