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

Route::get('/', 'HomeController@index')
        ->name('home');

Route::get('/details', 'DetailController@index')
        ->name('detail');
        
Route::get('/checkout', 'CheckoutController@index')
        ->name('checkout');

Route::get('/sukses', 'SuksesController@index')
        ->name('sukses');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('admin.dashboard');
        Route::resource('paket-travel', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
    });


Auth::routes(['verify' => true]);
