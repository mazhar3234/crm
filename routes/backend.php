<?php
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register backend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', 'AuthController@index');
Route::post('/authentication.post', 'AuthController@authentication')->name('authentication.post');

Route::group(['middleware' => 'AdminAuth'], function() {
	Route::get('/dashboard', 'AuthController@dashboard');
	Route::get('/signout', 'AuthController@logout');

	#--- user route ---#
	Route::get('/users', 'UsersController@index');
	Route::get('/create-user', 'UsersController@create');
	Route::post('/save-user', 'UsersController@store')->name('save-user.post');
	Route::get('/edit-user/{id}', 'UsersController@edit');
	Route::post('/update-user', 'UsersController@update')->name('update-user.post');
	Route::get('/delete-user/{id}', 'UsersController@destroy');

	#--- vehicle route ---#
	Route::get('/vehicles', 'VehiclesController@index');
	Route::get('/create-vehicle', 'VehiclesController@create');
	Route::post('/save-vehicle', 'VehiclesController@store')->name('save-vehicle.post');
	Route::get('/details-vehicle/{id}', 'VehiclesController@show');
	Route::get('/edit-vehicle/{id}', 'VehiclesController@edit');
	Route::post('/update-vehicle', 'VehiclesController@update')->name('update-vehicle.post');
	Route::get('/delete-vehicle/{id}', 'VehiclesController@destroy');

	#--- vehicle class route ---#
	Route::get('/vehicle-class', 'VehicleClassController@index');
	Route::get('/create-vehicle-class', 'VehicleClassController@create');
	Route::post('/save-vehicle-class', 'VehicleClassController@store')->name('save-vehicle-class.post');
	Route::get('/edit-vehicle-class/{id}', 'VehicleClassController@edit');
	Route::post('/update-vehicle-class', 'VehicleClassController@update')->name('update-vehicle-class.post');
	Route::get('/delete-vehicle-class/{id}', 'VehicleClassController@destroy');
// company
	Route::get('company-info', 'UsersController@company');
	Route::post('/update-company-info', 'UsersController@updateCompany')->name('update-company-info.post');
	#--- price route ---#
	// Route::get('/prices', 'PricesController@index');
	// Route::get('/create-price', 'PricesController@create');
	// Route::post('/save-price', 'PricesController@store')->name('save-price.post');
	// Route::get('/edit-price/{id}', 'PricesController@edit');
	// Route::post('/update-price', 'PricesController@update')->name('update-price.post');
	// Route::get('/delete-price/{id}', 'PricesController@destroy');

	#--- location route ---#
	Route::get('/locations', 'LocationsController@index');
	Route::get('/create-location', 'LocationsController@create');
	Route::post('/save-location', 'LocationsController@store')->name('save-location.post');
	Route::get('/edit-location/{id}', 'LocationsController@edit');
	Route::post('/update-location', 'LocationsController@update')->name('update-location.post');
	Route::get('/delete-location/{id}', 'LocationsController@destroy');

	#--- driver route ---#
	// Route::get('/drivers', 'DriversController@index');
	// Route::get('/create-driver', 'DriversController@create');
	// Route::post('/save-driver', 'DriversController@store')->name('save-driver.post');
	// Route::get('/edit-driver/{id}', 'DriversController@edit');
	// Route::post('/update-driver', 'DriversController@update')->name('update-driver.post');
	// Route::get('/delete-driver/{id}', 'DriversController@destroy');

	#--- reservation route ---#
	Route::get('/reservations', 'ReservationsController@index');
	Route::get('/edit-reservation/{id}', 'ReservationsController@edit');
	Route::post('/update-reservation', 'ReservationsController@update')->name('update-reservation.post');
	Route::get('/details-reservation/{id}', 'ReservationsController@show');
	Route::get('/print-reservation/{id}', 'ReservationsController@print');
	Route::get('/delete-reservation/{id}', 'ReservationsController@destroy');
});