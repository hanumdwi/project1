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
    return view('sembarang');
});
//Route::get('sembarang', 'CheckoutController@GetAddress');

Route::get('customerindex', 'master\controller_customer@index');
Route::get('customercreate', 'master\controller_customer@create');
Route::post('customerstore', 'master\controller_customer@store');
Route::get('customeredit{id}', 'master\controller_customer@edit');
Route::post('customerupdate', 'master\controller_customer@update');
Route::get('customerdestroy{id}', 'master\controller_customer@destroy');

Route::get('productindex', 'master\controller_product@index');
Route::get('productcreate', 'master\controller_product@create');
Route::post('productstore', 'master\controller_product@store');
Route::get('productedit{id}', 'master\controller_product@edit');
Route::post('productupdate', 'master\controller_product@update');
Route::get('productdestroy{id}', 'master\controller_product@destroy');

Route::get('categoriesindex', 'master\controller_categories@index');
Route::get('categoriescreate', 'master\controller_categories@create');
Route::post('categoriesstore', 'master\controller_categories@store');
Route::get('categoriesedit{id}', 'master\controller_categories@edit');
Route::post('categoriesupdate', 'master\controller_categories@update');
Route::get('categoriesdestroy{id}', 'master\controller_categories@destroy');

Route::get('userindex', 'master\controller_user@index');
Route::get('usercreate', 'master\controller_user@create');
Route::post('userstore', 'master\controller_user@store');
Route::get('useredit{id}', 'master\controller_user@edit');
Route::post('userupdate', 'master\controller_user@update');
Route::get('userdestroy{id}', 'master\controller_user@destroy');


Route::get('salesindex', 'transaksi\controller_sales@index');
Route::get('salescreate', 'transaksi\controller_sales@create');
Route::get('sales/edit', 'transaksi\controller_sales@edit');
Route::get('sales/destroy', 'transaksi\controller_sales@destroy');

Route::get('dsalesindex', 'transaksi\controller_detail_sales@index');
Route::get('salesdcreate', 'transaksi\controller_salesd@create');
Route::get('detail_sales/edit', 'transaksi\controller_detail_sales@edit');
Route::get('detail_sales/destroy', 'transaksi\controller_detail_sales@destroy');

Route::get('detilsales', 'transaksi\controller_detail_sales@index');


