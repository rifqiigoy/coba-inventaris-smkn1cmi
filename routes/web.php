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
    // return view('index');
// });
// 
// Route::get('/inventaris', function () {
    // return view('inventaris');
// });

//home
Route::get('/','PagesController@home');//Halaman Utama

//tampil
Route::get('/inventaris/kiba','InvenController@index');//Halaman Kib A
Route::get('/inventaris/kibb','InvenController@indexb');//Halaman Kib B
Route::get('/inventaris/kibc','InvenController@indexc');//Halaman Kib C
Route::get('/inventaris/kibd','InvenController@indexd');//Halaman Kib D
Route::get('/inventaris/kibe','InvenController@indexe');//Halaman Kib E

//create
Route::get('/inventaris/kiba/create','InvenController@create');//Create Kib A
Route::get('/inventaris/kibb/create','InvenController@createb');//Create Kib B
Route::get('/inventaris/kibc/create','InvenController@createc');//Create Kib C
Route::get('/inventaris/kibd/create','InvenController@created');//Create Kib D
Route::get('/inventaris/kibe/create','InvenController@createe');//Create Kib E

//strore
Route::post('/inventaris/kibb/','InvenController@storeb');//Store Kib B
Route::post('/inventaris/kibc/','InvenController@storec');//Store Kib C
Route::post('/inventaris/kibd/','InvenController@stored');//Store Kib D
Route::post('/inventaris/kibe/','InvenController@storee');//Store Kib E
