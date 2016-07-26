<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MealsModal;

class main extends Controller
{
    public function TablePrint(Request $request){

        $data1['PatientName'] = $request->input('name');
        $data1['date'] = $request->input('date');
        $meals = $request->except(['name','date','_token']);
        $se = serialize($meals);
        $data1['value'] = $se ;
        $table = MealsModal::create($data1);

        $beforunserilize = $table['value'];
        $data = unserialize($beforunserilize);
        $data['PatientName'] =  $data1['PatientName'];
        $data['date'] =$data1['date'] ;
       
        return view('print.print',compact('data'));


    }
}
