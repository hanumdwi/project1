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

///////////////////////////////////////////////////////////////
/* 
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Hanum';
    return view('about', ['nama' => $nama]);
});
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/admin', 'AdminController@tampil_admin');
Route::get('admin/header', 'AdminController@tampil_header');
Route::get('admin/footer', 'AdminController@tampil_footer');
Route::get('admin/sidebar', 'AdminController@tampil_sidebar');
