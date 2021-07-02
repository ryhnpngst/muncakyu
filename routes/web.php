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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/detail/{slug}', 'DetailCOntroller@index')
    ->name('detail');

Route::get('/destinasi', 'DestinasiCOntroller@index')
    ->name('destinasi');

Route::get('/peralatan', 'PeralatanCOntroller@index')
    ->name('peralatan');

Route::get('/persiapan', 'PersiapanCOntroller@index')
    ->name('persiapan');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('destination', 'DestinationController');
        Route::resource('gallery', 'GalleryController');

    });
Auth::routes(['verify' => true]);

