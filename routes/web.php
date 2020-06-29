<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// chuyen trang cua login
Auth::routes();
Route::get('/auth/login',"Auth\LoginController@index")->name('auth.login');
Route::post('/auth/login',"Auth\LoginController@login");

//chuyen den trang logout
Route::get('/home/logout',"User\HomeController@logout");

//chuyen trang cua register
Route::get('/auth/register',"Auth\RegisterController@index")->name('auth.register');
Route::post('/auth/register',"Auth\RegisterController@register");

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
// ADMIN

Route::get('/admin/dashboard',"Admin\ProductController@index")->name('admin.dashboard');
//CRUD Users
Route::get('/admin/users/index',"Admin\ProductController@indexU")->name('admin.users.indexU');

Route::delete('/admin/users/{id}',"User\HomeController@destroy");
 
Route::get('/users/{id}/edit',"User\HomeController@edit");
Route::PATCH('/users/{id}',"User\HomeController@update");

// CRUD product
Route::get('/admin/product/index',"Admin\ProductController@indexP")->name('admin.product.indexP');

Route::delete('/admin/{id}',"Admin\ProductController@destroy");

Route::post('/admin/product',"Admin\ProductController@store");
Route::get('/admin/product/create',"Admin\ProductController@create");

Route::get('/admin/product/{id}/edit',"Admin\ProductController@edit");
Route::PATCH('/admin/product/{id}',"Admin\ProductController@update");

// CRUD category
Route::get('/admin/category/index',"Admin\CategoryController@index")->name('admin.category.index');

Route::post('/admin/category',"Admin\CategoryController@store");
Route::get('/admin/category/create',"Admin\CategoryController@create");

Route::delete('/admin/{id}',"Admin\CategoryController@destroy");

Route::get('/admin/category/{id}/edit',"Admin\CategoryController@edit");
Route::PATCH('/admin/category/{id}',"Admin\CategoryController@update");
});

Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function(){

// USERS
Route::get('/home',"User\HomeController@index")->name('home');

Route::get('/user/animals/show/{id}',"User\HomeController@details");

Route::get('/user/cart',"User\HomeController@indexCart");
Route::Post('/user/cart/{id}',"User\HomeController@addCart");
Route::get('/user/cart/{id}/increase',"User\HomeController@increase");
Route::get('/user/cart/{id}/crease',"User\HomeController@crease");

Route::delete('/user/cart/{id}',"User\HomeController@delete");

Route::get('/user/search',"User\HomeController@search");


// Route::get('/home', 'User\HomeController@index')->name('home');
});
//  Route::get('/home/productOfCate/{id}', 'User\HomeController@productCate');

//  Route::get('/header','Admin\ProductController@header');



