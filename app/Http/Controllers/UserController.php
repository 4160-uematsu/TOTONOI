<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }
    
    public function edit2(Request $request)
    {
        return view('edit');
    }
    
    public function update(Request $request)
    {
        $path = $request->file('image')->store('public/avatar');
        $image_path = basename($path);




        return redirect("/users/edit")->with("message", "アップロードに成功しました。");
    }
}
