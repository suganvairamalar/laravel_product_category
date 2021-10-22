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

/*Route::get('/', function () {
    return view('frontend.index');
});*/



Auth::routes();

//'isAdmin' is mentioned in Kernal.php
Route::group(['middleware'=>['auth','isAdmin']],function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/registered-user','Admin\RegisteredUserController@index');
    Route::get('role-edit/{id}','Admin\RegisteredUserController@edit');
    Route::put('role-update/{id}','Admin\RegisteredUserController@updaterole');
    Route::get('/admin-profile', 'Admin\RegisteredUserController@adminrprofile');
Route::post('/admin-profile-update', 'Admin\RegisteredUserController@adminprofileupdate');

});





//'isUser' is mentioned in Kernal.php
Route::group(['middleware'=>['auth','isUser']],function(){

Route::get('/user-home', 'Frontend\UserController@index')->name('user-home');
Route::get('/user-profile', 'Frontend\UserController@userprofile');
Route::post('/user-profile-update', 'Frontend\UserController@userprofileupdate');

});


//CATEGORY
Route::get('category','Admin\CategoryController@index');
Route::get('category_add','Admin\CategoryController@create');
Route::post('category_store','Admin\CategoryController@store');
Route::get('category_edit/{id}','Admin\CategoryController@edit');
Route::put('category_update/{id}','Admin\CategoryController@update');
Route::get('category_delete/{id}','Admin\CategoryController@delete');
Route::get('category_deleted_records','Admin\CategoryController@delete_records');
Route::get('category_deleted_restore/{id}','Admin\CategoryController@delete_restore');

//PRODUCT
Route::get('product','Admin\ProductController@index');
Route::get('/','Admin\ProductController@product_category_search');
Route::post('product_store','Admin\ProductController@store');
Route::get('product_edit/{id}','Admin\ProductController@edit');
Route::get('product_detail/{id}','Admin\ProductController@detail');
Route::put('product_update/{id}','Admin\ProductController@update');
Route::get('product_delete/{id}','Admin\ProductController@delete');
Route::get('product_deleted_records','Admin\ProductController@delete_records');
Route::get('product_deleted_restore/{id}','Admin\ProductController@delete_restore');


Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

