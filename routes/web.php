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
    return view('bismillah');
});
//Route::get('sembarang', 'CheckoutController@GetAddress');

Route::get('sembarang', 'MyFirstController@index');

Route::get('customerindex', 'master\controller_customer@index');
Route::get('customercreate', 'master\controller_customer@create');
Route::post('customerstore', 'master\controller_customer@store');
Route::get('customeredit{id}', 'master\controller_customer@edit');
Route::post('customerupdate', 'master\controller_customer@update');
Route::get('customerdestroy{id}', 'master\controller_customer@destroy');
Route::post('customerupdateswitch', 'master\controller_customer@update_switch');

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
Route::post('categoriesupdateswitch', 'master\controller_categories@update_switch');

Route::get('pegawaiindex', 'master\controller_pegawai@index');
Route::get('pegawaicreate', 'master\controller_pegawai@create');
Route::post('pegawaiinsertdata', 'master\controller_pegawai@insertdata');
Route::post('pegawaistore', 'master\controller_pegawai@store');
Route::get('pegawaiedit{id}', 'master\controller_pegawai@edit');
Route::post('pegawaiupdate', 'master\controller_pegawai@update');
Route::get('pegawaidestroy{id}', 'master\controller_pegawai@destroy');


Route::get('salesindex', 'transaksi\controller_sales@index');
Route::get('salescreate', 'transaksi\controller_sales@create');
Route::post('salesstore', 'transaksi\controller_sales@store');
Route::get('salesedit{id}', 'transaksi\controller_sales@edit');
Route::post('salesupdate', 'transaksi\controller_sales@update');
Route::get('salesdestroy{id}', 'transaksi\controller_sales@destroy');

Route::get('dsalesindex', 'transaksi\controller_detail_sales@index');
Route::get('salesdcreate', 'transaksi\controller_salesd@create');
Route::get('detail_sales/edit', 'transaksi\controller_detail_sales@edit');
Route::get('detail_sales/destroy', 'transaksi\controller_detail_sales@destroy');

Route::get('detilsales', 'transaksi\controller_detail_sales@index');


