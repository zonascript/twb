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

Route::get('/', 'FrontendController@home');
Route::get('/produk-kami', 'FrontendController@product');
Route::get('/video', 'FrontendController@video');
Route::get('/berita', 'FrontendController@berita');
Route::get('/berita/detail', 'FrontendController@beritaDetail');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'DashboardController@dashboard');

    Route::get('/setting/permission', 'PermissionController@index');
    Route::get('/setting/permission-datatable-list', 'PermissionController@datatableList');
    Route::get('/setting/permission/create', 'PermissionController@create');
    Route::post('/setting/permission/store', 'PermissionController@store');
    Route::get('/setting/permission/{id}/edit', 'PermissionController@edit');
    Route::post('/setting/permission/{id}/update', 'PermissionController@update');
});

Route::get('/home', 'HomeController@index')->name('home');
