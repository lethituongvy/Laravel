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

Route::get('/', function () {
    return view('welcome');
});
// chuyen trang cua login
Route::get('/auth/login',"Auth\LoginController@index")->name('auth.login');
Route::post('/auth/login',"Auth\LoginController@login");

//chuyen den trang logout
Route::get('/home/logout',"User\HomeController@logout");

//chuyen trang cua register
Route::get('/auth/register',"Auth\RegisterController@index")->name('auth.register');
Route::post('/auth/register',"Auth\RegisterController@register");

//show trang admin
Route::get('/admin/dashboard',"Admin\ProductController@index")->name('admin.dashboard');

// show trang quan li users
Route::get('/admin/users/index',"Admin\ProductController@indexU")->name('admin.users.indexU');

//delete users
Route::delete('/admin/users/{id}',"User\HomeController@destroy");
 
//edit users
Route::get('/users/{id}/edit',"User\HomeController@edit");
Route::PATCH('/users/{id}',"User\HomeController@update");

// show trang quan li product
Route::get('/admin/product/index',"Admin\ProductController@indexP")->name('admin.product.indexP');

//delete product 
Route::delete('/admin/{id}',"Admin\ProductController@destroy");

//insert product
Route::post('/admin/product',"Admin\ProductController@store");
Route::get('/admin/product/create',"Admin\ProductController@create");

//edit products
Route::get('/admin/product/{id}/edit',"Admin\ProductController@edit");
Route::PATCH('/admin/product/{id}',"Admin\ProductController@update");

//show trang quan li category
Route::get('/admin/category/index',"Admin\CategoryController@index")->name('admin.category.index');

// insert category
Route::post('/admin/category',"Admin\CategoryController@store");
Route::get('/admin/category/create',"Admin\CategoryController@create");

//delete category
Route::delete('/admin/{id}',"Admin\CategoryController@destroy");

//edit category
Route::get('/admin/category/{id}/edit',"Admin\CategoryController@edit");
Route::PATCH('/admin/category/{id}',"Admin\CategoryController@update");


// USERS
Route::get('/home',"User\HomeController@index")->name('home');

// DETAILS
Route::get('/user/animals/show/{id}',"User\HomeController@details");

//CART
Route::get('/user/cart',"User\HomeController@indexCart");
Route::Post('/user/cart/{id}',"User\HomeController@addCart");
Route::get('/user/cart/{id}/increase',"User\HomeController@increase");
Route::get('/user/cart/{id}/crease',"User\HomeController@crease");
Route::delete('/user/cart/{id}',"User\HomeController@delete");

// Search
 Route::get('/user/search',"User\HomeController@search");

 Route::get('/home/productOfCate/{id}', 'User\HomeController@productCate');

 Route::get('/header','Admin\ProductController@header');