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

Route::get('/admin', function () {
    return view('admin/login');
});

Route::get('/admin/index', function () {
    return view('admin/index');
});
