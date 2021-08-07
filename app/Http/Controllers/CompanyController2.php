<?php

namespace App\Http\Controllers;
use App\Models\Company_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyController2 extends Controller
{
    function index(){

        return view('/company');

    }

    function Company2(Request $request){
        $input = $request->only('name', 'time', 'promotion','photo', 'title','address','riyu1','riyu2','riyu3');
        
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/storage/company_promotion');
            $path2 = basename($path); 
            
            $entry = new Company_info();
            $entry->name = $input["name"];
            $entry->time = $input["time"];
            $entry->promotion = $input["promotion"];
            $entry->title = $input["title"];
            $entry->address = $input["address"];
            $entry->riyu1 = $input["riyu1"];
            $entry->riyu2 = $input["riyu2"];
            $entry->riyu3 = $input["riyu3"];
            $entry->photo = $path2;
            $entry->save();

            $info = \App\Models\company_info::where('name', $entry->name)->first();

            // $info = \App\Models\company_info::find($entry->name);

            return view('companylook', compact('info'));
            
            // return view('companylook',[
            //     "info" => $input]);  
        }
        else{
            $entry = new Company_info();
            $entry->name = $input["name"];
            $entry->time = $input["time"];
            $entry->promotion = $input["promotion"];
            $entry->title = $input["title"];
            $entry->address = $input["address"];
            $entry->riyu1 = $input["riyu1"];
            $entry->riyu2 = $input["riyu2"];
            $entry->riyu3 = $input["riyu3"];
            $entry->photo = '';
            $entry->save();
            
            $info = $entry;            
            return view('companylook', compact('info'));
            // return view('companylook',[
            //     "info" => $input]);
            // $info = \App\Models\company_info::find($entry->name);

        }
    }    
}