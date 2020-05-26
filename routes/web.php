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

Route::get('/', 'BlogController@home');
Route::get('/about', 'BlogController@about');


Route::get('/test', function (\Illuminate\Http\Request $request) {
    dd(\Illuminate\Http\Request::url());
    return view('test');
});

Route::get('/blog/{post}', 'BlogController@show');
