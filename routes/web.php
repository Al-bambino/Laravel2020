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

Route::get('/tariff-add-ons', 'TariffAddOnController@index');
Route::get('/tariff-add-ons/create', 'TariffAddOnController@create');
Route::get('/tariff-add-ons/{tariffAddOn}/edit', 'TariffAddOnController@edit');
Route::post('/tariff-add-ons', 'TariffAddOnController@store');
Route::put('/tariff-add-ons/{tariffAddOn}','TariffAddOnController@update');
Route::delete('/tariff-add-ons/{tariffAddOn}','TariffAddOnController@destroy');

Route::get('/internet-providers', 'InternetProviderController@index');
Route::get('/internet-providers/{internetProvider}', 'InternetProviderController@show');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users', 'UserController@index');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::put('/users/{user}', 'UserController@update');
