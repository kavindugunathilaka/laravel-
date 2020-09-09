<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
$data=App\StoreModel::all();

     return view('login')->with('login',$data);
});

Route::get('/updatedata', function () {
    return view('updatedata');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::post('/saveTask','PageController@store');

Route::get('/markascompleted/{id}','PageController@UpdateComplete');


Route::get('/markasNOTcompleted/{id}','PageController@UpdateNOTComplete');

Route::get('/deletedata/{id}','PageController@deletedata');

Route::get('/updatedata/{id}','PageController@updatedata');

Route::get('/updatedata1','PageController@updatedata1');




