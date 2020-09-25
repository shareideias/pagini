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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');

Route::get('/faq', function () {
    return view('FAQ');
})->name('faq');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/blog', 'BlogController@index')->name('blogIndex');
Route::post('/blog', 'BlogController@store')->name('blogStore');
Route::post('/blog/{id}', 'BlogController@update')->name('blogUpdate');
Route::get('/blog/novo', 'BlogController@create')->name('blogCreate');
Route::get('/blog/editar/{id}', 'BlogController@edit')->name('blogEdit');
Route::get('/blog/apagar/{id}', 'BlogController@destroy')->name('blogDestroy');

Auth::routes();
