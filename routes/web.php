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
    return view('index');
});

Route::get('tt/{n}',function($n){
    return view('tt',['n'=>$n]);    
});

Route::get('uu','App\Http\Controllers\TestController@index');

Route::get('firstname','App\Http\Controllers\NameController@firstname');
Route::get('middlename','App\Http\Controllers\NameController@middlename');
Route::get('lastname','App\Http\Controllers\NameController@lastname');

Route::get('tasks/create','App\Http\Controllers\TasksController@create');
Route::post('tasks','App\Http\Controllers\TasksController@store');