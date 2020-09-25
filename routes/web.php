<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\\Http\\Controllers\\HomeController@home')->name('home');
Route::get('/contacts', 'App\\Http\\Controllers\\userController@index')->name('users');
Route::get('/messages',   'App\\Http\\Controllers\\Posts\\Comments@index')->name('messages');
Route::post('/comments/store/', 'App\\Http\\Controllers\\Posts\\Comments@store')->name('comments.add');
Route::post('/comments/delete/{id}', 'App\\Http\\Controllers\\Posts\\Comments@delete')->name('comments.delete');