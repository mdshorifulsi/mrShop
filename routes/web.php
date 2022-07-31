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

// Route::get('/', function () {
//     return view('layouts');
// });



Route::get('/','HomeController@index')->name('home');



Route::get('/product-category{id}','HomeController@product_by_category')->name('product_by_category');
Route::get('/product_by_manufacture{id}','HomeController@product_by_manufacture')->name('product_by_manufacture');
Route::get('/view_product/{id}','HomeController@view_product')->name('view_product');


//Cart Route............
Route::post('/add_cart','CartController@add_cart')->name('add_cart');
Route::get('/show_cart','CartController@show_cart')->name('show_cart');
Route::get('/delete_cart{rowId}','CartController@delete_cart')->name('delete_cart');
Route::post('/update_cart','CartController@update_cart')->name('update_cart');



//checkout Route.....................
Route::get('/login_check','CheckoutController@login_check')->name('login_check');
Route::post('/customer_registration','CheckoutController@customer_registration')->name('customer_registration');
Route::get('/checkout','CheckoutController@checkout')->name('checkout');
Route::post('/shipping_details','CheckoutController@shipping_details')->name('shipping_details');


//payment Route.........
Route::get('/payment','PaymentController@payment')->name('payment');
Route::post('/order_place','PaymentController@order_place')->name('order_place');


//customer login logout
Route::post('/customer_login','CheckoutController@customer_login')->name('customer_login');
Route::get('/login_logout','CheckoutController@login_logout')->name('login_logout');






//backend route

Auth::routes();
Route::get('/dashboard','AdminController@index')->name('dashboard');

//category Route
Route::get('/all-category','CategoryController@index')->name('all.category');
Route::get('/add-category','CategoryController@create')->name('add.category');
Route::post('/store-category','CategoryController@store')->name('store.category');
Route::get('/delete-category{id}','CategoryController@destroy')->name('delete.category');
Route::get('/edit-category{id}','CategoryController@edit')->name('edit.category');
Route::post('/update-category{id}','CategoryController@update')->name('update.category');

//route manufacture
Route::get('/all-manufacture','ManufactureController@index')->name('all.manufacture');
Route::get('/add-manufacture','ManufactureController@create')->name('add.manufacture');
Route::post('/store-manufacture','ManufactureController@store')->name('store.manufacture');
Route::get('/delete-manufacture{id}','ManufactureController@destroy')->name('delete.manufacture');
Route::get('/edit-manufacture{id}','ManufactureController@edit')->name('edit.manufacture');
Route::post('/update-Manufacture{id}','ManufactureController@update')->name('update.Manufacture');




//product Route...........
Route::get('/all-product','ProductController@index')->name('all.product');
Route::get('/add-product','ProductController@create')->name('add.product');
Route::post('/store-product','ProductController@store')->name('store.product');
Route::get('/delete-product{id}','ProductController@destroy')->name('delete.product');
Route::get('/edit-product{id}','ProductController@edit')->name('edit.product');
Route::post('/update-product{id}','ProductController@update')->name('update.product');
Route::get('/unactive{id}','ProductController@unactive_product')->name('unactive');
Route::get('/active{id}','ProductController@active_product')->name('active');



//slider Route............

Route::get('/all-slider','SliderController@index')->name('all.slider');
Route::get('/add-slider','SliderController@create')->name('add.slider');
Route::post('/store-slider','SliderController@store')->name('store.slider');

Route::get('/delete-slider{id}','SliderController@destroy')->name('delete.slider');




//manage order Route.....

Route::get('manage_order','OrderController@manage_order')->name('manage_order');
