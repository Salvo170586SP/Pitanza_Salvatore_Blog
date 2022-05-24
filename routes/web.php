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

Auth::routes(['register' => true , 'login' => true]);

//administrator
Route::middleware('auth')->prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/posts', 'PostController');
    Route::resource('/projects', 'ProjectController');
});

//guest
Route::get('{any?}', function () {
    return view('guest.home');
})->name('guest.home')->where('any', '.*');
