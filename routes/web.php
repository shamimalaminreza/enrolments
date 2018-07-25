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
//h0m fr0ntnd product_by_category
Route::get('/','HomeController@index');
Route::get('/product_by_category/{category_id}','HomeController@productbycategory');

Route::get('/product_category/{category_id}','HomeController@productcategory');


Route::get('/product_by_manufacture/{manufacture_id}','HomeController@productbymanufacture');
Route::get('/view_product/{product_id}','HomeController@product_details_by_id');

//mthd add-to-cart
Route::post('/add-to-cart', 'CartController@addtocart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::post('/update-cart', 'CartController@update_cart');
///mmthd lst
//mthd Wishlist

Route::get('/Wishlist','HomeController@Wish_list');
Route::post('/add-to-Save-list','HomeController@add_Save_list');
Route::get('/show-list', 'HomeController@show_list');
Route::get('/delete-to-list/{rowId}', 'HomeController@delete_to_list');

//mthd Compayer

Route::get('/Compayer','HomeController@Compayer_list');
Route::post('/add-to-comparer','HomeController@add_comparer');
Route::get('/show-compayer', 'HomeController@show_compayer');


//mthd Profile
Route::get('/Profile','HomeController@Pro_file');
Route::post('/update_customer/{customer_id}','HomeController@updatecustomer');

//mthd login-checkoutcustomer-login
Route::get('/login-checkout', 'CheckoutController@login_checkout');
Route::post('/customer-registration', 'CheckoutController@customer_registration');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save-shipping-details', 'CheckoutController@save_shipping_details');
Route::post('/customer-login', 'CheckoutController@customer_login');
Route::get('/customer-logout', 'CheckoutController@customer_logout');



//mthd payment

Route::get('/payment', 'CheckoutController@payment');
Route::post('/order-place', 'CheckoutController@order_place');

//mthd manage_order
Route::get('/manage_order', 'CheckoutController@manage_order');
Route::get('/view-order/{order_id}', 'CheckoutController@view_order');
//order//mthd delitem

Route::get('/delitem/{order_id}', 'SuperadminController@del_item');
Route::get('/successorder/{order_id}', 'SuperadminController@success_order');

//contact-us
Route::get('/contact-us','HomeController@contact_us');
Route::post('/save-contact','HomeController@save_contact');

//mthd Save-Review
Route::post('/Save-Review','HomeController@Save_Review');

//backnd st

//SuperadminController
Route::get('/dashboard','SuperadminController@index');
Route::get('/logout','SuperadminController@logout');
Route::get('/profile','SuperadminController@profile');
Route::get('/admin_edit/{admin_id}','SuperadminController@adminedit');
Route::post('/updte_admin/{admin_id}', 'SuperadminController@adminupdte');
Route::get('/admin_delete/{admin_id}','SuperadminController@admindelete');


//AdminController
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/admin','AdminController@index');




//mthd add_category

Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactivecategory');
Route::get('/active_category/{category_id}','CategoryController@activecategory');
Route::get('/edit-category/{category_id}','CategoryController@editcategory');
Route::post('/update-category/{category_id}','CategoryController@updatecategory');
Route::get('/delete-category/{category_id}','CategoryController@deletecategory');

//mthd all add-manufacture'

Route::get('/add-manufacture','ManufactureController@index');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@deletemanufacture');
Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactivemanufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@activemanufacture');
Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@editmanufacture');
Route::post('/update-manufacture/{manufacture_id}','ManufactureController@updatemanufacture');


//mthd add-products
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@allproduct');
Route::get('/unactive_product/{product_id}','ProductController@unactiveproduct');
Route::get('/active_product/{product_id}','ProductController@activeproduct');
Route::get('/delete-product/{product_id}','ProductController@deleteproduct');
Route::get('/edit-product/{product_id}','ProductController@editproduct');
Route::post('/update-product/{product_id}','ProductController@updateproduct');


//add-slider ha
Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@saveslider');
Route::get('/all-slider','SliderController@allslider');
Route::get('/unactive_slider/{slider_id}','SliderController@unactiveslider');
Route::get('/active_slider/{slider_id}','SliderController@activeslider');
Route::get('/delete_slider/{slider_id}','SliderController@deleteslider');

//manage_contact
Route::get('/manage_contact', 'SuperadminController@manage_contact');
Route::get('/view-contact/{contact_id}', 'SuperadminController@view_contact');
Route::get('/view-contacts/{contact_id}', 'SuperadminController@view_contacts');
Route::get('/del-contact/{contact_id}', 'SuperadminController@del_contact');

