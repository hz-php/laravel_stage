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

Route::get('/', 'App\Http\Controllers\PostController@index')->name('index');

Route::group(['middleware' => 'fin'], function () {
    Route::post('/names', 'App\Http\Controllers\FormContorller@index')->middleware('emptys');

    Route::get('/post', function () {
        $forms_inp = 'Hello world';
        return view('form', compact('forms_inp'));
    })->name('post');

    Route::get('/post_two', function () {
        return redirect(\route('post'));
    })->name('post_two');

    Route::get('three', 'App\Http\Controllers\RoutesController@index')->name('three');
});

Route::get('create', 'App\Http\Controllers\PostController@create')->name('create');

Route::post('store', 'App\Http\Controllers\PostController@store')->name('store');

