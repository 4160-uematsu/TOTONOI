<?php
namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class CompanyController extends Controller
{
    function index(){
		//@TODO 投稿一覧画面を表示

        // $item_list = Company::all();
		$item_list = company::orderBy('id', 'desc')->get();
		// $item_list = Company::orderBy('id', 'desc')->paginate(15);
        return view("/Bulletin_board/top_board", [
			"item_list" => $item_list
		]);
    }
    //@TODO 投稿処理を行う
    function create(Request $request){
        
        $id = Auth::id();
        $input = $request->only('companyname','author', 'title', 'body', 'image');
        if($request->hasFile('image')) {
            $path = $request->file('image')->store('public/company');
            $path2 = basename($path); 
            $author = $request->author;
            // $id2 = \App\Models\User::where('name', $author)->first();
            // $id2 = $id2['id'];

            $entry = new company();
            $entry->author_id = $id;
            $entry->companyname = $input["companyname"];
            $entry->author = $input["author"];
            $entry->title = $input["title"];
            $entry->image_path = $path2;
            $entry->body = $input["body"];
            $entry->save();
            
            return redirect('/log')->with([
                "image"  => basename($path)]);
        }
        else{
            $entry = new company();
            $entry->author_id = $id;
            $entry->companyname = $input["companyname"];
            $entry->author = $input["author"];
            $entry->title = $input["title"];
            $entry->image_path = "";
            $entry->body = $input["body"];
            $entry->save();
            return redirect('/log');
        }
    }
}