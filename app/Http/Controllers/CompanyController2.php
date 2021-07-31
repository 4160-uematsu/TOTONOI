<?php

namespace App\Http\Controllers;
use App\Models\User2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController2 extends Controller
{
    function index(){

        $c = new CompanyController2;
        $id= Auth:: id('title');
        return view('company_home');
    }


}