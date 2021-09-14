<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Companyusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;


class RegisterController extends Controller
{
    public function create()
    {
        return view('regist.register');
    }

    public function store(Request $request)
    {
        $input = $request->only('company','name', 'email', 'password');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:companyusers',
            'password' => 'required|string|confirmed|min:5',

        ]);

        $company_user  = new companyusers();
        $company_user->companyinfo_id     = $input["company"];
        $company_user->name               = $input["name"];
        $company_user->email              = $input["email"];
        $company_user->password           = $input["password"];
        
        $company_user->save();


        return view('company', compact('company_user'));

    }
}
