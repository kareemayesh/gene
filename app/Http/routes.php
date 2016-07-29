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
Route::get('/table2',function (){
    /* low cost launch */
    return view('tables.table2');
});
Route::get('/table3',function (){
    /* low cost dinner*/
    return view('tables.table3');
});
Route::get('/table4',function (){
    /* medium meat launch */
    return view('tables.table4');
});
Route::get('/table5',function (){
    /* medium meat dinner */
    return view('tables.table5');
});
Route::get('/table6',function (){
    /* hard meat dinner */
    return view('tables.table6');
});
Route::get('/table7',function (){
    /* hard meat launch */
    return view('tables.table7');
});
Route::get('/table8',function (){
    /* low meat dinner */
    return view('tables.table8');
});
Route::get('/table9',function (){
    /* low meat launch */
    return view('tables.table8');
});
Route::get('/route',function (){

    return view('pages.route');
});
Route::post('/TablePrint','main@TablePrint');
Route::get('/print',function (){
    return view('print.print');
});