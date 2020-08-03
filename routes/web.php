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

//create
Route::get('/inventaris/kiba/create','InvenController@create');//Create Kib A
Route::get('/inventaris/kibb/create','InvenController@createb');//Create Kib B

//strore
Route::post('/inventaris/kibb/','InvenController@storeb');//Store Kib B
