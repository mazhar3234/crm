<?php
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register frontend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/tours', 'HomeController@tour');
Route::get('/contact-us', 'HomeController@contact');
Route::get('/currency/{text}', 'HomeController@setCurrency');
Route::get('/language/{text}', 'HomeController@setLanguage');

Route::get('/set-vehicle/{id}', 'HomeController@setVehicle');
Route::get('/add-location/{id?}', 'HomeController@addLocation');
Route::get('/load-cars/{distance?}/{sort?}', 'HomeController@vehicles');
Route::get('/get-distance/{from?}/{to?}', 'HomeController@getDistance');
Route::post('/get-reservation', 'HomeController@reservation');
// Route::get('/get-reservation/{data}', 'HomeController@reservation');
