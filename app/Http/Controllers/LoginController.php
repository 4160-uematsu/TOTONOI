<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Companyusers;
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
        
        if (companyusers::where('email', '=',  $credentials["email"] )->exists()) {
            if (companyusers::where('password', '=',  $credentials["password"] )->exists()) {
                
                $view=view('companylook');
                
                $email = $credentials["email"];
                $info = \App\Models\Companyusers::where('email', $email)->first();
                $id = $info['companyinfo_id']; 

                $info = \App\Models\Company_info::where('id', $id)->first();
                $view->with('info', $info);

                $search_name = $info['name']; 
                $info2 = \App\Models\Company::where('companyname', '=',$search_name)
                ->orderBy('id', 'desc')->get();
                $view->with('info2', $info2);

                return $view;


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
