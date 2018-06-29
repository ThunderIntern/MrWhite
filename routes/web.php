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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'index_controller@index')->name('landing-page');
Route::get('/shop', 'shop_controller@index')->name('shop.index');
Route::get('/shop/{product}', 'shop_controller@show')->name('shop.show');

// Route::get('/list', function () {
//     return view('list_product');
// });
Route::get('/detail', function () {
    return view('detail_product');
});

Route::get('/simple', 'catalogController@create');

//admin
Route::get('/login', 'AdminController@login');
Route::post('/loginPost', 'AdminController@loginPost')->name('login-post');
Route::get('/logout', 'AdminController@logout');
Route::get('admin', ['uses' => 'AdminController@index', 'as' => 'admin.dashboard']);
Route::get('admin/katalog/dataProduk', ['as' => 'admin.dataProduk', function(){return view('\admin\katalog\dataProduk');}]);
Route::get('admin/katalog/dataKategori', ['as' => 'admin.dataKategori', function(){return view('\admin\katalog\dataKategori');}]);
Route::get('admin/katalog/produkBaru', ['as' => 'admin.produkBaru', function(){return view('\admin\katalog\produkBaru');}]);
Route::get('admin/webSetting/homepage', ['as' => 'admin.homepage', function(){return view('\admin\webSetting\homepage');}]);
Route::get('admin/webSetting/component', ['as' => 'admin.component', function(){return view('\admin\webSetting\component');}]);
