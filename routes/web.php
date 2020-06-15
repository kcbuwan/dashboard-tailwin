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
    
    Route::get('dashboard/forms', function () {
        return view('admin.forms');
    });

    Route::get('dashboard/tables', function () {
        return view('admin.tables');
    });

    Route::get('dashboard/forms-sidebar', function () {
        return view('admin.forms-sidebar');
    });

    Route::get('dashboard/role', function () {
        return view('admin.role');
    });

    Route::get('dashboard/forms-basic', function () {
        return view('admin.forms-basic');
    });

    Route::get('dashboard/table-basic', function () {
        return view('admin.table-basic');
    });

    Route::get('dashboard/menu', function () {
        return view('admin.menu');
    });

    Route::get('dashboard/add-menu', function () {
        return view('admin.add-menu');
    });

    Route::get('dashboard/media-manager', function () {
        return view('admin.media-manager');
    });

    Route::get('dashboard/product', function () {
        return view('admin.product');
    });

    Route::get('dashboard/product-edit', function () {
        return view('admin.product-edit');
    });

    Route::get('dashboard/product-edit-sidebar', function () {
        return view('admin.product-edit-sidebar');
    });

    Route::get('dashboard/website-setting', function () {
        return view('admin.website-setting');
    });

    Route::get('dashboard/data-import', function () {
        return view('admin.data-import');
    });

    Route::get('dashboard/permissions', function () {
        return view('admin.permissions');
    });

    Route::get('dashboard/auspost', function () {
        return view('admin.auspost');
    });

    Route::get('dashboard/dashboard-side-bar', function () {
        return view('admin.dashboard-side-bar');
    });

    Route::get('dashboard/dashboard-table', function () {
        return view('admin.dashboard-table');
    });

    Route::get('dashboard/dashboard-product', function () {
        return view('admin.dashboard-product');
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

});