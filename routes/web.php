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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/grisha', function () {
    return view('grisha');
});


Route::get('/egor', function () {
    return view('egor', [
		'Named' => 'ЕгорКа!'
	
	]);
});


Route::get('egor', 'testcontroller@calcFive');