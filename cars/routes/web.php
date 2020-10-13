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
Route::get('/car', 'CarController@car');
Route::get('/id/{id}', 'CarController@id');
Route::get('/car/create', 'CarController@create');
Route::post('car/add', 'CarController@add');
Route::get('/car_list', 'CarController@car');

//for driver section
Route::get('/driver', function(){
    return view('driver');
});
Route::get('/driver', 'DriverController@driver');
Route::get('/id/{id}', 'DriverController@id');
Route::get('/car/create', 'DriverController@create');
Route::post('car/add', 'DriverController@add');
Route::get('/car_list', 'DriverController@car');