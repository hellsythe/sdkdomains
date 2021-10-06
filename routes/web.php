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

Route::namespace('\App\Http\Controllers')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('search', 'HomeController@searchResult')->name('search.result');
    Route::get('/resellers', 'HomeController@resellers')->name('resellers');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/cart', 'HomeController@cart')->name('cart');
    Route::post('/pay', 'ShopController@pay')->name('pay');
    Route::post('/process-pay', 'ShopController@processPay')->name('process-pay');
});

Route::namespace('\App\Http\Controllers\Admin')
->prefix('admin')->group(function () {
    Route::resource('domain-prices', DomainPriceController::class);
    Route::resource('domains', DomainController::class);
    Route::resource('accounts', AccountController::class);
});
