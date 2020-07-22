<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('product-edit', function () {
        return view('admin.product-edit');
    });

    Route::get('website-setting', function () {
        return view('admin.website-setting');
    });

    Route::get('data-import', function () {
        return view('admin.data-import');
    });

    Route::get('dashboard-table', function () {
        return view('admin.dashboard-table');
    });

    Route::get('product', function () {
        return view('admin.product');
    });

    Route::get('media-manager', function () {
        return view('admin.media-manager');
    });

    Route::get('website-setting-side', function () {
        return view('admin.website-setting-side');
    });

    Route::get('permissions-side', function () {
        return view('admin.permissions-side');
    });

    Route::get('add-menu', function () {
        return view('admin.add-menu');
    });

    Route::get('menu', function () {
        return view('admin.menu');
    });

     Route::get('form-input', function () {
        return view('admin.form-input');
    });

});