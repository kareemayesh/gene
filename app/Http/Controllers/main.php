<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class main extends Controller
{
    public function TablePrint(Request $request){
        $data = $request->toArray();

        return view('print.print',compact('data'));


    }
}
