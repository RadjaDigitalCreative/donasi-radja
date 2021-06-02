<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

// ROUTE API GUEST 
Route::get('supplier', 'Api\Supplier@index')->name('api.supplier');
Route::get('supplier/{id}', 'Api\Supplier@edit')->name('api.supplier');
Route::post('supplier', 'Api\Supplier@create')->name('api.supplier');
Route::put('supplier/{id}', 'Api\Supplier@update')->name('api.supplier');
Route::delete('supplier/{id}', 'Api\Supplier@delete')->name('api.supplier');


// ROUTE TAMPILAN DEPAN
Route::get('donasi', 'Api\Front@index')->name('api.donasi');
Route::get('donasi/{id}', 'Api\Front@edit')->name('api.donasi');
Route::get('daftarprogram', 'Api\Front@daftarprogram')->name('api.daftarprogram');


// ROUTE TAMPILAN BACK END
Route::get('supplier', 'Api\Supplier@index')->name('api.supplier');
Route::get('supplier/{id}', 'Api\Supplier@edit')->name('api.supplier');
Route::post('supplier', 'Api\Supplier@create')->name('api.supplier');
Route::put('supplier/{id}', 'Api\Supplier@update')->name('api.supplier');
Route::delete('supplier/{id}', 'Api\Supplier@delete')->name('api.supplier');
