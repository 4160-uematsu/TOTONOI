<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class UserController extends Controller
{

    public function edit2(Request $request)
    {
        return view('edit');
    }
    

    public function update(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);
        // 投稿内容の受け取って変数に入れる
        $name = $request->input('name');
        $comment = $request->input('comment');
        if($request->hasFile('image')) {
            // 画像のアップロード
            $path = $request->file('image')->store('public/avatar');
            $image_path = basename($path);
            $home_path = basename($path);
            // // DBにアップロードする
            $image_path2 = new Image();
            $image_path2->fill([
                'user_id'=>1,
                'image_name'=>$name,
                'comments'=>$comment,	
                'image_path'=>$image_path,
                ]);
                $array_2=(array)$image_path2;
                $image_path2->fill($array_2)->save();
        }else{
            // // DBにアップロードする
            $image_path3 = new Image();
            $image_path3->fill([
                'user_id'=>1,
                'image_name'=>$name,	
                'comments'=>$comment,	
                'image_path'=>'',
                ]);
                $array_3=(array)$image_path3;
                $image_path3->fill($array_3)->save();   
        }       
        // 画像に表示させる
        if($request->hasFile('image')) {
            return redirect("/users/edit")->with([
                "message" => "投稿に成功しました。",
                "name" => $name,
                "comment"  => $comment,
                "image"  => basename($path)]);
        }else{
            return redirect("/users/edit")->with([
                "message" => "投稿に成功しました。",
                "name" => $name,
                "comment"  => $comment]);
        }
    }
}