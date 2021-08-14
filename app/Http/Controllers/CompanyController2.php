<?php

namespace App\Http\Controllers;
use App\Models\Company_info;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyController2 extends Controller
{
    function index(){

        return view('/company');

    }
        
    function Company2(Request $request){
        $input = $request->only('name', 'time', 'promotion','photo','address','riyu1','riyu2','riyu3');
            $view=view('companylook');
            
            $entry = new Company_info();
            $entry->name = $input["name"];
            $entry->time = $input["time"];
            $entry->promotion = $input["promotion"];
            $entry->address = $input["address"];
            
            if($request->riyu1) {                   //riyuの場合分け
                $entry->riyu1 = $input["riyu1"];
            }else{
                $entry->riyu1 = '0';
            }
            
            if($request->riyu2) {
                $entry->riyu2 = $input["riyu2"];
            }else{
                $entry->riyu2 = '0';
            }        
            
            if($request->riyu3) {
                $entry->riyu3 = $input["riyu3"];
            }else{
                $entry->riyu3 = '0';
            }
            $entry->title = '';
            
            if($request->photo) {                   //画像の場合分け
                $path = $request->file('photo')->store('public/company_promotion');
                $path2 = basename($path); 
                $entry->photo = $path2;
            }else{
            $entry->photo = '';
            }    

            $entry->save();
            $info =$entry;
            $view->with('info', $info);

            $info2 = \App\Models\company::where('companyname', $entry->name)->first();
            $view->with('info2', $info2);

            return $view;

        }

}