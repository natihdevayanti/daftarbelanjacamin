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
Route::get('/', 'ProductsController@index');
 
Route::get('cart', 'ProductsController@cart');
 
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');
 
Route::delete('remove-from-cart', 'ProductsController@remove');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('buyer')->middleware('isBuyer')->group(function(){
    Route::get('/', 'BuyerController@buyerPage'); 
   // Route::post('/upload-assignment', 'AssignmentController@uploadAssignment')->name('upload.assignment');
});
Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/', 'AdminController@adminPage');
   // Route::post('/upload-assignment', 'AssignmentController@uploadAssignment')->name('upload.assignment');
});
Route::prefix('courier')->middleware('isCourier')->group(function(){
    Route::get('/', 'CourierController@adminPage');
});