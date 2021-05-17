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
        // 画像のアップロード
        $path = $request->file('image')->store('public/avatar');
        $image_path = basename($path);
        
        // // DBにアップロードする
        $image_path2 = new Image();
        $image_path2->fill([
            'user_id'=>1,
            'image_name'=>'',	
            'image_path'=>$image_path,
            ]);
            $array_2=(array)$image_path2;
            $image_path2->fill($array_2)->save();    


        return redirect("/users/edit")->with("message", "アップロードに成功しました。");
        // $image_path2->image_pass = $image_path;
        // $image_path2->save();
    }
}
