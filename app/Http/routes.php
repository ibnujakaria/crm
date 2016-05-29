<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'auth'], function() {
  Route::get('', 'Admin\AdminController@index');

  Route::resource('sales', 'Admin\SalesController');
  Route::resource('/leads', 'Admin\LeadsController');

  Route::get('/customers', 'Admin\CustomerController@index');
  Route::get('/promo-campaign', 'Admin\PromoCampaignController@index');
  Route::get('/activities', 'Admin\ActivityController@index');
  Route::get('/products', 'Admin\ProductController@index');
  Route::resource('/oportunities', 'Admin\OportunityController');
  Route::get('/auth/logout', 'Auth\AuthController@logout');
});

Route::group(['middleware' => 'guest'], function() {
  Route::get('/auth/login', 'Auth\AuthController@login');
  Route::post('/auth/login', 'Auth\AuthController@loginProcess');
});
