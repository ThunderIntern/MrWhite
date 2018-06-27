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
Route::get('/shop/{name}', 'shop_controller@show_category')->name('shop.category');

// Route::get('/list', function () {
//     return view('list_product');
// });
Route::get('/detail', function () {
    return view('detail_product');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/simple', 'catalogController@create');