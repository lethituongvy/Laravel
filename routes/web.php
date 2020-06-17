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
Route::get('/admin/dashboard',"Admin\DashboardController@index")->name('admin.dashboard');

// show trang quan li users
Route::get('/admin/users/index',"Admin\DashboardController@indexU")->name('admin.users.indexU');

//delete users
Route::delete('/admin/users/{id}',"User\HomeController@destroy");
 
//edit users
Route::get('/admin/users/{id}/edit',"Admin\DashboardController@editU");
Route::PATCH('/admin/users/{id}',"Admin\DashboardController@updateU");

// show trang quan li animals
Route::get('/admin/animals/index',"Admin\DashboardController@indexP")->name('admin.users.indexP');

//delete product 
Route::delete('/admin/{id}',"Admin\DashboardController@destroy");

//insert product
Route::post('/admin/animals',"Admin\DashboardController@store");
Route::get('/admin/animals/create',"Admin\DashboardController@create");

//edit products
Route::get('/admin/animals/{id}/edit',"Admin\DashboardController@edit");
Route::PATCH('/admin/animals/{id}',"Admin\DashboardController@update");

// show trang user
Route::get('/home',"User\HomeController@index")->name('home');

// show chi tiet cho người dùng
Route::get('/user/animals/show/{id}',"User\HomeController@details");

//hien thi gio hang
Route::get('/user/cart/{id}',"User\HomeController@cart");

// Search
 Route::get('/user/search',"User\HomeController@search");



