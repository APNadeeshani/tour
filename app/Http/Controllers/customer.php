<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\custom;

class customer extends Controller
{
    public function customers(){
        $custom = new custom;
        $data =custom::all();
        return view('cushome')->with('custom',$data);
    }


    public function neww(){

        return view('cusnew');
    }

    public function savecust(Request $request){

        $custom = new custom;
        $custom->cna=$request->name;
        $custom->cad=$request->addrs;
        $custom->tel=$request->phone;
        $custom->cot=$request->cnty;
        $custom->rmk=$request->Remark;
        $custom->save();
        return redirect()->back();
       // dd($request-> all());
    }

    
}
