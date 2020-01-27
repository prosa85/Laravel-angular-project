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

Route::get('/angular', function () {
    return \File::get(public_path() .'app/index.hmtl');
});

Route::get('test', function(){
    return 'Test 2';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
