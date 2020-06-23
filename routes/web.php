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

    Route::get('dashboard/product-edit-sidebar', function () {
        return view('admin.product-edit-sidebar');
    });

    Route::get('dashboard/website-setting', function () {
        return view('admin.website-setting');
    });

    Route::get('dashboard/data-import', function () {
        return view('admin.data-import');
    });

    Route::get('dashboard/dashboard-side-bar', function () {
        return view('admin.dashboard-side-bar');
    });

    Route::get('dashboard/dashboard-table', function () {
        return view('admin.dashboard-table');
    });

    Route::get('dashboard/dashboard-product-v2', function () {
        return view('admin.dashboard-product-v2');
    });

    Route::get('dashboard/media-manager-side', function () {
        return view('admin.media-manager-side');
    });

    Route::get('dashboard/website-setting-side', function () {
        return view('admin.website-setting-side');
    });

    Route::get('dashboard/permissions-side', function () {
        return view('admin.permissions-side');
    });

    Route::get('dashboard/login', function () {
        return view('admin.login');
    });

    Route::get('dashboard/add-menu-side', function () {
        return view('admin.add-menu-side');
    });

    Route::get('dashboard/menu-side', function () {
        return view('admin.menu-side');
    });

});