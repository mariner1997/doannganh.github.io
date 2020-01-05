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

Route::get('trang-chu',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('loai-tour/{type}',[
    'as'=>'loaitour',
    'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-tour/{id}',[
    'as'=>'chitiettour',
    'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);

Route::get('dang-ky',[
    'as'=>'signup',
    'uses'=>'PageController@getSignup'
]);

Route::post('dang-ky',[
    'as'=>'signup',
    'uses'=>'PageController@postSignup'
]);

Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);

Route::get('search',[
    'as'=>'search',
   'uses'=>'PageController@getSearch'
]);

Route::get('admin',[
    'as'=>'admin',
   'uses'=>'PageController@getDashboard'
]);

Route::get('addtour',[
    'as'=>'addtour',
   'uses'=>'PageController@getAddtour'
]);

Route::post('addtour',[
    'as'=>'addtour',
   'uses'=>'PageController@postAddtour'
]);

Route::get('edittour/{id}',[
    'as'=>'edittour',
   'uses'=>'PageController@getEdittour'
]);

Route::post('edittour/{id}',[
    'as'=>'edittour',
   'uses'=>'PageController@postEdittour'
]);

Route::get('xoa/{id}',[
    'as'=>'xoa',
   'uses'=>'PageController@getXoa'
]);
