<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post("signup",'Apis\\Authentication\\RegisterController@create')->name("signup");
Route::post("signin",'Apis\\Authentication\\LoginController@login')->name("signin");//thuc thi xac thuc

// Route::get("/product", "Apis\\ProductController@index")->middleware("myauth");
//admin
Route::get('/user/{id}','Admin\UserController@getUserInfo');//xem detal user
Route::delete('admin/user/{id}','Admin\UserController@deleteUser');//xoa 1 user
Route::post('/user/{id}','Admin\UserController@updateUser');//update 1 user
Route::post('/admin/add/user','Admin\UserController@addUser');//update 1 user

Route::post('/admin/add/product','Admin\ProductController@addProduct');// add product
Route::get('/admin/get/product/{ProductID}','Admin\ProductController@getProductInfo');// view product
Route::delete('/admin/delete/product/{ProductID}','Admin\ProductController@deleteProduct');// delete product
Route::post('/admin/update/product','Admin\ProductController@updateProduct');// delete product

//thanh toan
Route::post('checkout', 'Apis\\CheckOutController@create');

//admin

//admin
Route::middleware('myauth:api')->get('/product', "Apis\\ProductController@index");

Route::post("reset",'Apis\\Authentication\\ResetPasswordController@sendToken')->name("reset");
Route::post("changepassword",'Apis\\Authentication\\ResetPasswordController@changePassword')->name("changepassword");

Route::get("getHeader",'Apis\\Authentication\\LoginController@getHeader');


Route::get("/main-product/{page}", "Apis\\MainProductController@getByPage");
Route::get("/detail-product/{id}", "Apis\\DetailController@getDetail");
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

