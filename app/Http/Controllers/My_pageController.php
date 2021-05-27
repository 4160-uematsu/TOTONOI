<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class My_pageController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->find(1);
        return view('my_page', ['my_user' => $user]);
    }
}
