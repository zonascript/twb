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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

$loginUrl = config('misc.login-url');
$adminPrefix = config('misc.admin-prefix');

Route::get('/', 'FrontendController@home');
Route::get('/produk-kami', 'FrontendController@product');
Route::get('/video', 'FrontendController@video');
Route::get('/berita', 'FrontendController@berita');
Route::get('/berita/detail', 'FrontendController@beritaDetail');
Route::get('/seru-mewarnai', 'FrontendController@seru');

// Auth::routes();
Route::get($loginUrl, 'Auth\LoginController@showLoginForm')->name($loginUrl);
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::get('/logout', 'Auth\LoginController@logout');
//Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('/register', 'Auth\RegisterController@register');

Route::group([
    'middleware' => ['auth', 'authorize'],
    'prefix' => $adminPrefix
], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin');

    Route::get('/setting/permission', 'PermissionController@index')->name('setting.permission');
    Route::get('/setting/permission/create', 'PermissionController@create')->name('setting.permission.add');
    Route::post('/setting/permission/store', 'PermissionController@store')->name('setting.permission.add');
    Route::get('/setting/permission/{id}/edit', 'PermissionController@edit')->name('setting.permission.edit');
    Route::post('/setting/permission/{id}/update', 'PermissionController@update')->name('setting.permission.edit');
    Route::get('/setting/permission/{id}/destroy', 'PermissionController@destroy')->name('setting.permission.delete');

    Route::get('/setting/role', 'RoleController@index')->name('setting.role');
    Route::get('/setting/role/create', 'RoleController@create')->name('setting.role.add');
    Route::post('/setting/role/store', 'RoleController@store')->name('setting.role.add');
    Route::get('/setting/role/{id}/edit', 'RoleController@edit')->name('setting.role.edit');
    Route::post('/setting/role/{id}/update', 'RoleController@update')->name('setting.role.edit');
    Route::get('/setting/role/{id}/destroy', 'RoleController@destroy')->name('setting.role.delete');

    Route::get('/setting/user', 'UserController@index')->name('setting.user');
    Route::get('/setting/user/create', 'UserController@create')->name('setting.user.add');
    Route::post('/setting/user/store', 'UserController@store')->name('setting.user.add');
    Route::get('/setting/user/{id}/edit', 'UserController@edit')->name('setting.user.edit');
    Route::post('/setting/user/{id}/update', 'UserController@update')->name('setting.user.edit');
    Route::get('/setting/user/{id}/destroy', 'UserController@destroy')->name('setting.user.delete');
});

// without menu generator
Route::group(['middleware' => ['auth', 'authorize']], function() {
    Route::get('/setting/permission-datatable-list', 'PermissionController@datatableList')->name('setting.permission');
    Route::get('/setting/role-datatable-list', 'RoleController@datatableList')->name('setting.role');
    Route::get('/setting/user-datatable-list', 'UserController@datatableList')->name('setting.user');
});


Route::get('/home', 'HomeController@index')->name('home');
