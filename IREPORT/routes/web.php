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

// Route::get('master', function () {
//     return view('layouts/master');
// });

Route::get('about', function () {
    return view('about');
});
// user
// Route::get('detail', function () {
//     return view('user/detail');
// });
// Route::get('edit', function () {
//     return view('user/edit');
// });
// Route::get('home', function () {
//     return view('user/home');
// });
// Route::get('input', function () {
//     return view('user/input');
// });


// admin
// berita
// Route::get('createBerita', function () {
//     return view('admin/berita/create');
// });
// Route::get('indexBerita', function () {
//     return view('admin/berita/index');
// });
// Route::get('showBerita', function () {
//     return view('admin/berita/show');
// });

// laporan
// Route::get('createLaporan', function () {
//     return view('admin/laporanUSer/create');
// });
// Route::get('indexLaporan', function () {
//     return view('admin/laporanUSer/index');
// });
// Route::get('showLaporan', function () {
//     return view('admin/laporanUSer/show');
// });


    // Route::get('/laporan', 'LaporanController@index')->name('produk');
    Route::get('/laporan/create', 'LaporanController@create');
    Route::post('/laporan', 'LaporanController@inputData');
    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/{id}', 'LaporanController@show');
    Route::get('/laporan/{id}/edit', 'LaporanController@edit');
    Route::put('/laporan/{id}', 'LaporanController@update');
    Route::delete('/laporan/{id}', 'LaporanController@destroy');

// p
Auth::routes(); 

// Route::get('/home', 'HomeController@index')->name('home');
