<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/customer','customer@customers'); //load customer home
Route::get('/cusnew','customer@neww'); //load customer new
Route::post('/savecus','customer@savecust'); //save customer
Route::get('/drivernew','drivers@drivnew');
Route::get('/vahiclenew','vehiclecon@vehiclenew');
Route::get('/placenew','placecon@placeconnew');
Route::get('/activitynew','activitycon@activityew');
Route::get('/hotelnew','hotelcon@hotelsnew');
