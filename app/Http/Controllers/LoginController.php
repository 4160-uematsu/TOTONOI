<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Companyusers;
// use App\Models\Company_info;
use App\Models\Companyinfo;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.Company_login');

    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email','password');
        
        if (Companyusers::where('email', '=',  $credentials["email"] )->exists()) {
            if (Companyusers::where('password', '=',  $credentials["password"] )->exists()) {
                
                $email = $credentials["email"];
                $info = \App\Models\Companyusers::where('email', $email)->first();
                $id = $info['companyinfo_id']; 
                $info = \App\Models\company_info::where('id', $id)->first();
                // $info = \App\Models\company_info::find($id);

                return view('companylook', compact('info'));

            }
        }
        $message = "メールアドレスまたはパスワードが正しくありません。";
        return view('auth.Company_login', compact('message'));
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
