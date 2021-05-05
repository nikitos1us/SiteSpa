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
Route::post('/contacts',  'App\Http\Controllers\FormRVController@sendRequest')->name('form.store');


Route::post('/review/check',  'App\Http\Controllers\FormRVController@revcheck')->name('review.check');



//Adminpanel
Route::get('/adminpanel','App\Http\Controllers\AdminController@login');
Route::post('/adminpanel/check','App\Http\Controllers\AdminController@check')->name('adminpanel.check');

Route::group(['middleware'=>['AuthCheck']],function (){

    Route::get('/adminpanel/admin_main','App\Http\Controllers\AdminController@main')->name('adminpanel.main');
    Route::get('/adminpanel/logout','App\Http\Controllers\AdminController@logout')->name('adminpanel.logout');
    Route::get('/adminpanel/settings','App\Http\Controllers\AdminController@settings')->name('adminpanel.settings');
    Route::get('adminpanel/profile','App\Http\Controllers\AdminController@profile');

    Route::get('/adminpanel/addvis','App\Http\Controllers\AdminController@showvisitors');
    Route::get('/adminpanel/vischeck','App\Http\Controllers\AdminController@vischeck')->name('adminpanel.vischeck');

    Route::get('/adminpanel/addpersons','App\Http\Controllers\AdminController@showpersons')->name('adminpanel.persons');
    Route::get('/adminpanel/perscheck','App\Http\Controllers\AdminController@perscheck')->name('adminpanel.perscheck');
    Route::get('/adminpanel/perschange/{id}/edit','App\Http\Controllers\AdminController@persedit' )->name('adminpanel.persedit');
    Route::post('/adminpanel/perschange/{id}/edit','App\Http\Controllers\AdminController@perseditsubmit' )->name('adminpanel.perseditsubmit');

    Route::get('/adminpanel/perschange/{id}/delete','App\Http\Controllers\AdminController@persdelete')->name('adminpanel.persdel');
});
