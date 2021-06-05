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

// Route::get('/', function () {
//     return view('main0182');
// });
Route::get('/','App\Http\Controllers\PraktikumController@dokter')->name('dokter');
Route::get('/kamar','App\Http\Controllers\PraktikumController@kamar')->name('kamar');
Route::get('/pasien','App\Http\Controllers\PraktikumController@pasien')->name('pasien');
Route::get('/user','App\Http\Controllers\PraktikumController@user')->name('user');
Route::get('/user/edit/{id}','App\Http\Controllers\PraktikumController@user_edit')->name('edit');
Route::post('/user/edit/update','App\Http\Controllers\PraktikumController@user_update')->name('update');
Route::post('/kamar/filter','App\Http\Controllers\PraktikumController@kamar_filter')->name('filter');
Route::post('/dokter/filter','App\Http\Controllers\PraktikumController@dokter_filter')->name('dokter_filter');
Route::get('/pasien/tambah', function () {
    return view('tambah_pasien0182');
});
Route::post('/pasien/insert','App\Http\Controllers\PraktikumController@tambah_pasien')->name('insert_pasien');