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

//Route::get('/index', function () {
//    return view('index');
//});

//Route::get('/about', function () {
//    return view('about');
//});

//Route::get('/', 'PageController@home');
Route::get('/index', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/siswa', 'siswacontroller@siswa');


Route::get('siswa/{siswa}', 'siswacontroller@show');
Route::get('siswa/{siswa}/edit', 'siswacontroller@edit');
Route::post('siswa/{siswa}/update', 'siswacontroller@update');
Route::get('siswa/{siswa}/delete', 'siswacontroller@delete');
Route::get('siswa_cetak', 'siswacontroller@cetak_pdf');

Route::get('/guru', 'gurucontroller@guru');
Route::get('guru/createguru', 'gurucontroller@create');
Route::post('guru', 'gurucontroller@store');
Route::get('guru/{guru}', 'gurucontroller@show');
Route::get('guru/{guru}/editguru', 'gurucontroller@edit');
Route::post('guru/{guru}/update', 'gurucontroller@update');
Route::get('guru/{guru}/delete', 'gurucontroller@delete');
Route::get('guru_cetak', 'gurucontroller@cetak_pdf');

Route::get('/walikelas', 'walikelascontroller@walikelas');
Route::get('walikelas/createwalikelas', 'walikelascontroller@create');
Route::post('walikelas', 'walikelascontroller@store');
Route::get('walikelas/{walikelas}', 'walikelascontroller@show');
Route::get('walikelas/{walikelas}/editwalikelas', 'walikelascontroller@edit');
Route::post('walikelas/{walikelas}/update', 'walikelascontroller@update');
Route::get('walikelas/{walikelas}/delete', 'walikelascontroller@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'auth\LoginController@logout');
