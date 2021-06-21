<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    function index(){
		//@TODO 投稿一覧画面を表示

        // $item_list = Company::all();
		$item_list = Company::orderBy('id', 'desc')->get();
		// $item_list = Company::orderBy('id', 'desc')->paginate(15);
        return view("/Bulletin_board/top_board", [
			"item_list" => $item_list
		]);

    }
    //@TODO 投稿処理を行う
    function create(Request $request){
        
        $id = Auth::id();
        $input = $request->only('author', 'title', 'body', 'image');
        
        $path = $request->file('image')->store('public/company');
        $path2 = basename($path); 
        $entry = new Company();
        $entry->author_id = $id;
        $entry->author = $input["author"];
        $entry->title = $input["title"];
        $entry->image_path = $path2;
        $entry->body = $input["body"];
        
        $entry->save();

        // return redirect('/log');
        return redirect('/log')->with([
            "image"  => basename($path)]);
    }
    
}