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
Route::get('/video/{slug?}', 'FrontendController@video');
Route::get('/videos-paginated', 'VideoController@videosPaginated');
Route::get('/berita', 'FrontendController@berita');
Route::get('/berita/detail/{slug}', 'FrontendController@beritaDetail');
Route::get('/seru-mewarnai', 'FrontendController@seruMewarnai');
Route::get('/template-paginated', 'TemplateController@templatePaginated');
Route::get('/news-paginated/{type?}', 'NewsController@newsPaginated');
Route::get('/event-paginated', 'EventController@eventPaginated');
Route::get('/account', 'FrontendController@account');
Route::post('/ajaxImageUpload', 'ColoringController@ajaxImageUploadPost')->name('ajaxImageUpload');
Route::post('/ajaxCoinUpload', 'DuniaMainController@ajaxCoinUpload')->name('ajaxCoinUpload');
Route::get('/coloring-paginated', 'ColoringController@coloringPaginated');

// Auth::routes();
Route::get($loginUrl, 'Auth\LoginController@showLoginForm')->name($loginUrl);
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// forgot password email
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// reset password
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// registration
//Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::post('/ajax-login', 'FrontendLoginController@ajaxLogin');
Route::post('/ajax-register', 'FrontendLoginController@ajaxRegister');

Route::group([
    'middleware' => ['auth', 'authorize', 'menu'],
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
    Route::get('/setting/user/profile', 'UserController@profile')->name('setting.user');

    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/create', 'NewsController@create')->name('news.add');
    Route::post('/news/store', 'NewsController@store')->name('news.add');
    Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::post('/news/{id}/update', 'NewsController@update')->name('news.edit');
    Route::get('/news/{id}/destroy', 'NewsController@destroy')->name('news.delete');

    Route::get('/event', 'EventController@index')->name('event');
    Route::get('/event/create', 'EventController@create')->name('event.add');
    Route::post('/event/store', 'EventController@store')->name('event.add');
    Route::get('/event/{id}/edit', 'EventController@edit')->name('event.edit');
    Route::post('/event/{id}/update', 'EventController@update')->name('event.edit');
    Route::get('/event/{id}/destroy', 'EventController@destroy')->name('event.delete');

    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/product/create', 'ProductController@create')->name('product.add');
    Route::post('/product/store', 'ProductController@store')->name('product.add');
    Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::post('/product/{id}/update', 'ProductController@update')->name('product.edit');
    Route::get('/product/{id}/destroy', 'ProductController@destroy')->name('product.delete');

    Route::get('/video', 'VideoController@index')->name('video');
    Route::get('/video/create', 'VideoController@create')->name('video.add');
    Route::post('/video/store', 'VideoController@store')->name('video.add');
    Route::get('/video/{id}/edit', 'VideoController@edit')->name('video.edit');
    Route::post('/video/{id}/update', 'VideoController@update')->name('video.edit');
    Route::get('/video/{id}/destroy', 'VideoController@destroy')->name('video.delete');

    Route::get('/template', 'TemplateController@index')->name('template');
    Route::get('/template/create', 'TemplateController@create')->name('template.add');
    Route::post('/template/store', 'TemplateController@store')->name('template.add');
    Route::get('/template/{id}/edit', 'TemplateController@edit')->name('template.edit');
    Route::post('/template/{id}/update', 'TemplateController@update')->name('template.edit');
    Route::get('/template/{id}/destroy', 'TemplateController@destroy')->name('template.delete');

    Route::get('/promo', 'PromoController@index')->name('promo');
    Route::get('/promo/create', 'PromoController@create')->name('promo.add');
    Route::post('/promo/store', 'PromoController@store')->name('promo.add');
    Route::get('/promo/{id}/edit', 'PromoController@edit')->name('promo.edit');
    Route::post('/promo/{id}/update', 'PromoController@update')->name('promo.edit');
    Route::get('/promo/{id}/destroy', 'PromoController@destroy')->name('promo.delete');

    Route::get('/participant', 'CampaignController@participantIndex')->name('campaign.participant');
    Route::get('/participant-images', 'CampaignController@participantImages')->name('campaign.images');
    Route::get('/participant-images/{id}/detail', 'CampaignController@imageDetail')->name('campaign.detail');
    Route::get('/participant-images/update-status/{id}/{status}', 'CampaignController@updateStatus')->name('campaign.approve');

    Route::get('/coins/participant', 'CoinController@coinIndex')->name('coins');
    Route::get('/coins/images', 'CoinController@coinImages')->name('coins');
    Route::get('/coins/{id}/detail', 'CoinController@imageDetail')->name('coins');
    Route::get('/coins/update-status/{id}/{status}', 'CoinController@updateStatus')->name('coins');
});

// without menu generator
Route::group(['middleware' => ['auth', 'authorize']], function() {
    Route::get('/setting/permission-datatable-list', 'PermissionController@datatableList')->name('setting.permission');
    Route::get('/setting/role-datatable-list', 'RoleController@datatableList')->name('setting.role');
    Route::get('/setting/user-datatable-list', 'UserController@datatableList')->name('setting.user');
    Route::get('/news-datatable-list', 'NewsController@datatableList')->name('news');
    Route::get('/event-datatable-list', 'EventController@datatableList')->name('event');
    Route::get('/product-datatable-list', 'ProductController@datatableList')->name('product');
    Route::get('/video-datatable-list', 'VideoController@datatableList')->name('video');
    Route::get('/template-datatable-list', 'TemplateController@datatableList')->name('template');
    Route::get('/promo-datatable-list', 'PromoController@datatableList')->name('promo');
    Route::get('/participant-datatable', 'CampaignController@participantDatatable')->name('campaign.participant');
    Route::get('/participant-images-datatable', 'CampaignController@imageDatatable')->name('campaign.images');
    Route::get('/participant-datatable', 'CoinController@coinDatatable')->name('campaign.participant');
    Route::get('/participant-images-datatable', 'CoinController@imageDatatable')->name('campaign.images');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'TestController@form');
Route::post('/upload-image-handler', 'TestController@uploadImageHandler');
Route::post('/get-images-for-uploader', 'TestController@getImageForUploader');

Route::get('/dunia-main', 'DuniaMainController@home');
Route::get('/dunia-main/album/{userId}', 'DuniaMainController@album');
Route::post('/dunia-main/register', 'Auth\DuniaMainRegisterController@register');
Route::post('/dunia-main/complete-profile/{userId}', 'DuniaMainController@completeProfile');
Route::get('/dunia-main/logout', 'Auth\LoginController@duniaMainLogout')->name('dm_logout');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
