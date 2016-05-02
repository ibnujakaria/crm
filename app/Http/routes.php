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

Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/sales', 'Admin\SalesController@index');
Route::get('admin/leads', 'Admin\LeadsController@index');
Route::get('admin/customers', 'Admin\CustomerController@index');
Route::get('admin/promo-campaign', 'Admin\PromoCampaignController@index');
Route::get('admin/activities', 'Admin\ActivityController@index');
