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
});

Route::namespace('\App\Http\Controllers\Admin')
->prefix('admin')->group(function () { 
    Route::resource('domain-prices', DomainPriceController::class);
    Route::resource('domains', DomainController::class);
    Route::resource('accounts', AccountController::class);
});
