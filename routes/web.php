<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function () {
    $msg = "Mensaje desde el servidor";
    $num = 15;
    $data = ['msg' => $msg,'num' => $num];
    return view('custom',['data' => $data]);    
});