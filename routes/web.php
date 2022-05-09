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
Route::get('/uploaddoc/{$text}','App\Http\Controllers\ImgQRController@_construct');

Route::get('/uploaddoc/{$text}','App\Http\Controllers\ImgQRController@makeQrCode');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/uploaddoc', function () {
    return view('dashboard');
})->middleware(['auth'])->name('uploaddoc');

require __DIR__.'/auth.php';


Route::get('/auth.register', 'App\Http\Controllers\UserOfficeController@index');

Route::put('/auth.register', 'App\Http\Controllers\UserOfficeController@store');

Route::get('/posts', 'App\Http\Controllers\UserOfficeController@index');

Route::get('/uploaddoc', 'App\Http\Controllers\DocumentController@index');

Route::put('/uploaddoc', 'App\Http\Controllers\DocumentController@store');

#Route::post('/uploaddoc', 'App\Http\Controllers\ImgQRController@makeQrCode');
#Route::get('/uploaddoc', 'App\Http\Controllers\ImgQRController@makeQrCode');

#Route::get('/uploaddoc', 'App\Http\Controllers\DocumentController@getRefNumber');




