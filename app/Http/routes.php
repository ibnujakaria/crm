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

Route::get('', 'Admin\AdminController@index');
Route::get('/login', 'Admin\AdminController@index');
Route::get('/sales', 'Admin\SalesController@index');
Route::get('/leads', 'Admin\LeadsController@index');
Route::get('/customers', 'Admin\CustomerController@index');
Route::get('/promo-campaign', 'Admin\PromoCampaignController@index');
Route::get('/activities', 'Admin\ActivityController@index');
Route::get('/products', 'Admin\ProductController@index');
Route::get('/oportunities', 'Admin\OportunityController@index');
