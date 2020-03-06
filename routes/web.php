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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('myView', function(){
    return view('webtest');
   });

Route::get('ID/{id}', function($id){
    echo 'ID anda : '.$id;
});

Route::get('viewcontroll', 'MyFirstController@index');

Route::get('tampilnama', 'MyFirstController@nama');

Route::get('matkul', 'MyFirstController@matkul');

Route::get('getname/{nama}', 'MyFirstController@getNameFromUrl');

Route::get('formulir', 'MyFirstController@formulir');

Route::post('formulir/proses', 'MyFirstController@proses');

Route::get('home', 'MyFirstController@home');

Route::get('tentang', 'MyFirstController@tentang');
*/
///////////////////////////////////////////////////////////////
/*
Route::get('/', function () {
    return view('index');
});

Route::get('/customer', function(){
    return view('master/customer/index');
});

Route::get('/user', function(){
    return view('master/user/index');
});

Route::get('/product', function(){
    return view('master/product/index');
});

Route::get('/categories', function(){
    return view('master/categories/index');
});
*/
/*
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/admin', 'AdminController@tampil_admin');
Route::get('admin/header', 'AdminController@tampil_header');
Route::get('admin/footer', 'AdminController@tampil_footer');
Route::get('admin/sidebar', 'AdminController@tampil_sidebar');
*/
///////////////////////////////////////////////////////////////////

Route::get('/', function () {
    return view('index');
});

Route::get('customerindex', 'master\controller_customer@index');
Route::get('customercreate', 'master\controller_customer@create');
Route::post('customerstore', 'master\controller_customer@store');
Route::get('customeredit{id}', 'master\controller_customer@edit');
Route::post('customerupdate', 'master\controller_customer@update');
Route::get('customerdestroy/{id}', 'master\controller_customer@destroy');

Route::get('product/index', 'master\controller_product@index');
Route::get('product/create', 'master\controller_product@create');
Route::get('product/edit', 'master\controller_product@edit');
Route::get('product/destroy', 'master\controller_product@destroy');

Route::get('categories/index', 'master\controller_categories@index');
Route::get('categories/create', 'master\controller_categories@create');
Route::get('categories/edit', 'master\controller_categories@edit');
Route::get('categories/destroy', 'master\controller_categories@destroy');

Route::get('user/index', 'master\controller_user@index');
Route::get('user/create', 'master\controller_user@create');
Route::get('user/edit', 'master\controller_user@edit');
Route::get('user/destroy', 'master\controller_user@destroy');


Route::get('sales/index', 'transaksi\controller_sales@index');
Route::get('sales/create', 'transaksi\controller_sales@create');
Route::get('sales/edit', 'transaksi\controller_sales@edit');
Route::get('sales/destroy', 'transaksi\controller_sales@destroy');

Route::get('detail_sales/index', 'transaksi\controller_detail_sales@index');
Route::get('detail_sales/create', 'transaksi\controller_detail_sales@create');
Route::get('detail_sales/edit', 'transaksi\controller_detail_sales@edit');
Route::get('detail_sales/destroy', 'transaksi\controller_detail_sales@destroy');

