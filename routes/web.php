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

//Route::get('/', function () {
//    return view('index');
//});

Route::view('/', 'index')->name('home');
Route::view('/lecture', 'dashboard.lecture')->name('lecture');
Route::view('/account', 'dashboard.account-teacher')->name('account');
Route::view('/statistics', 'dashboard.statistics')->name('statistics');
Route::view('/statistics-details', 'dashboard.statistics-details')->name('statistics.details');

Route::view('/subject','dashboard.subject')->name('subject');
Route::view('/student', 'dashboard.student')->name('student');
