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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'Admin\LoginController@index')->name('login');
Route::post('/login', 'Admin\LoginController@PostLogin')->name('postlogin');

Route::prefix('backend')->middleware(['checklogin'])->group(function () {


    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::get('/catelist','Admin\CategoryNewController@index')->name('catelist');
    Route::get('/category-add','Admin\CategoryNewController@getadd')->name('catenewadd');
    Route::post('/category-add','Admin\CategoryNewController@postadd')->name('catenewaddpost');
    Route::get('/category-edit/{id}','Admin\CategoryNewController@getedit')->name('catnewedit');
    Route::post('/category-edit/{id}','Admin\CategoryNewController@postedit')->name('catneweditpost');

    Route::get('/user','Admin\UserController@index')->name('listuser');
    Route::get('/user-add','Admin\UserController@adduser')->name('getadduser');
    Route::post('/user-add','Admin\UserController@postadduser')->name('postadduser');
    Route::get('/user-edit/{id}','Admin\UserController@edituser')->name('edituser');
    Route::post('/user-edit/{id','Admin\UserController@postedituser')->name('postedituser');





});