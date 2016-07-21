<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/table',function (){
    return view('tables.table1');
});
Route::post('/TablePrint','main@TablePrint');
Route::get('/print',function (){
    return view('print.print');
});