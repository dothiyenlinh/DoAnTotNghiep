<?php

use App\Http\Controllers\HomeController;
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

//Frontend
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::post('/tim-kiem', 'HomeController@search');
Route::get('/all-customer', 'HomeController@all_customer');
Route::get('/san-pham', 'HomeController@san_pham');

//Danh-muc-san-pham
Route::get('/danh-muc-san-pham/{category_id}', 'CategoryProduct@show_category_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');

//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');

//Send Mail
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@postcontact');

//Category Product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');
Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product');

//Product
Route::get('/add-product', 'ProductController@add_product');
Route::get('/all-product', 'ProductController@all_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::post('/save-product', 'ProductController@save_product');
Route::post('/insert-rating', 'ProductController@insert_rating');
Route::post('/update-product/{product_id}', 'ProductController@update_product');

//Coupon
Route::post('/check-coupon', 'CartController@check_coupon');
Route::get('/unset-coupon', 'CouponController@unset_coupon');
Route::get('/delete-coupon/{coupon_id}', 'CouponController@delete_coupon');
Route::get('/insert-coupon', 'CouponController@insert_coupon');
Route::get('/list-coupon', 'CouponController@list_coupon');
Route::post('/insert-coupon-code', 'CouponController@insert_coupon_code');

//Cart
Route::post('/save-cart', 'CartController@save_cart');
Route::get('/save-cart', 'CartController@save_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::get('/del-product/{session_id}', 'CartController@delete_product');
Route::post('/update-cart-quantity', 'CartController@update_cart_quantity');
Route::post('/update-cart', 'CartController@update_cart');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');
Route::get('/gio-hang', 'CartController@gio_hang');
Route::get('/del-all-product', 'CartController@delete_all_product');


//Checkout
Route::get('/login', 'CheckoutController@login');
Route::get('/register', 'CheckoutController@register');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::get('/checkout', 'CheckoutController@checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::post('/order-place', 'CheckoutController@order_place');
Route::get('/handcash', 'CheckoutController@handcash');
Route::post('/save-checkout-customer', 'CartController@save_checkout_customer');
Route::post('/select-delivery-home', 'CheckoutController@select_delivery_home');
Route::post('/calculate-fee', 'CheckoutController@calculate_fee');
Route::post('/confirm-order', 'CheckoutController@confirm_order');
Route::get('/quen-mat-khau', 'CheckoutController@quen_mat_khau');
Route::post('/recover-pass', 'CheckoutController@recover_pass');
Route::post('/reset-new-pass', 'CheckoutController@reset_new_pass');
Route::get('/update-new-pass', 'CheckoutController@update_new_pass');

//Order
Route::get('/manage-order', 'OrderController@manage_order');
Route::get('/view-order/{order_code}', 'OrderController@view_order');
Route::get('/delete-order/{order_code}','OrderController@delete_order');

//Language
Route::get('/language/{language}', 'LanguageController@language');

//Delivery
Route::get('/delivery', 'DeliveryController@delivery');
Route::post('/select-delivery', 'DeliveryController@select_delivery');
Route::post('/insert-delivery', 'DeliveryController@insert_delivery');
Route::post('/select-feeship', 'DeliveryController@select_feeship');
Route::post('/update-delivery', 'DeliveryController@update_delivery');

//Banner
Route::get('/manage-slider', 'SliderController@manage_slider');
Route::get('/add-slider', 'SliderController@add_slider');
Route::get('/delete-slide/{slide_id}','SliderController@delete_slide');
Route::post('/insert-slider','SliderController@insert_slider');
Route::get('/unactive-slide/{slide_id}','SliderController@unactive_slide');
Route::get('/active-slide/{slide_id}','SliderController@active_slide');


//Payment online
Route::post('/payment-onlines','PaymentController@payment_onlines');
Route::get('/thanh-toan','PaymentController@thanh_toan');
Route::post('/thanhtoan-onlines','PaymentController@thanhtoan_onlines');
Route::get('/vnpay-return',['as'=>'vnpayreturn','uses'=>'PaymentController@vnpay_return']);
