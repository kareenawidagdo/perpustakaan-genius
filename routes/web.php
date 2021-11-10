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

/*** USER ***/
Route::get('/','UserController@index');
Route::get('detail/{kategori}/{slug}','UserController@detail');

    // Login
Route::get('login','LoginController@index');
Route::post('auth-login','LoginController@check');
Route::get('logout','LoginController@logout');

    // Sign Up
Route::get('register','LoginController@register');
Route::post('auth-register','LoginController@create');

    /*     ADMIN     */
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {

    // Dashboard
Route::get('admin/dashboard','AdminController@index');

    // Buku
Route::get('admin/buku','AdminController@buku');
Route::get('admin/buku/create','AdminController@create');
Route::post('admin/buku/save','AdminController@save');
Route::get('admin/buku/edit/{id}','AdminController@edit');
Route::post('admin/buku/update/{id}','AdminController@update');
Route::get('admin/buku/hapus/{id}','AdminController@delete');

    // Pinjam
Route::get('admin/pinjam','AdminController@pinjam');
Route::get('admin/pinjam/new/user','AdminController@peminjam');
Route::get('admin/pinjam/add/user/{id}','AdminController@form_pinjam');
Route::get('admin/pinjam/new/form/{id}/{id2}','AdminController@new_form');
Route::get('admin/pinjam/new/pinjam/{id}/{id2}/{id3}','AdminController@buku_pinjam');
Route::post('admin/pinjam/save/{id}/{id2}','AdminController@save_pinjam');
Route::get('admin/pinjam/form/delete/{id}/{id2}/{id3}','AdminController@hapus_bukpin');
Route::get('admin/pinjam/kembali/{id}','AdminController@kembalikan');

    // Pengguna
Route::get('admin/pengguna','AdminController@users');
Route::get('admin/pengguna/hapus/{id}','AdminController@hapus_user');

});


    /*     USER     */
Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function () {

Route::get('user/{id}/{token}','UserController@user');
Route::post('user/{id}/{token}/edit','UserController@user_edit');
Route::post('user/profil/edit/{id}','UserController@user_ganti');
Route::get('user/profil/hapus/{id}','UserController@user_hapus');

});