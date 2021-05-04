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

Route::get( '/',  'App\Http\Controllers\SiteSpaController@index');
Route::get( '/price',  'App\Http\Controllers\SiteSpaController@price');
Route::get('/contacts',  'App\Http\Controllers\FormRVController@show');
Route::get('/persons',  'App\Http\Controllers\SiteSpaController@persons');
Route::get('/connectDB',  'App\Http\Controllers\SiteSpaController@conn');
Route::post('/contacts',  'App\Http\Controllers\FormRVController@sendRequest')->name('form.store');



Route::get('/adminpanel','App\Http\Controllers\AdminController@login');
Route::post('/adminpanel/check','App\Http\Controllers\AdminController@check')->name('adminpanel.check');

Route::group(['middleware'=>['AuthCheck']],function (){

    Route::get('/adminpanel/admin_main','App\Http\Controllers\AdminController@main')->name('adminpanel.main');
    Route::get('/adminpanel/logout','App\Http\Controllers\AdminController@logout')->name('adminpanel.logout');
    Route::get('adminpanel/settings','App\Http\Controllers\AdminController@settings');
    Route::get('adminpanel/profile','App\Http\Controllers\AdminController@profile');
});
