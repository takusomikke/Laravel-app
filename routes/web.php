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

<<<<<<< HEAD
Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');
=======
Route::get('hello', function() {
            return view('hello.index');
}) ;
>>>>>>> 5df0e3d... Add hello/view template
