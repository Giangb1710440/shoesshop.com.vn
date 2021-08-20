<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//TRANG CHỦ//Hiển thị trang chủ admin
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//Trang sản phẩm
Route::get('/page-product', [HomeController::class, 'page_product']);

//Trang chi tiết sản phẩm
Route::get('/product-detail', [HomeController::class, 'product_detail']);

//Trang tin tức
Route::get('/page-news', [HomeController::class, 'page_news']);

//Trang liên lạc
Route::get('/page-contact', [HomeController::class, 'page_contact']);

//Trang about us
Route::get('/page-about', [HomeController::class, 'page_about']);

//Trang đăng nhập
Route::get('/page-login', [HomeController::class, 'page_login'])->name('page_login');

Route::post('/check-login',[HomeController::class,'check_login'])->name('check_login');

// Route::post('/post-login',[HomeController::class,'post_login']);

Route::post('/check_signup',[HomeController::class,'check_signup'])->name('check_signup');

//Trang đăng ký
Route::get('/page-signup', [HomeController::class, 'page_signup'])->name('page-signup');

//Trang giỏ hàng
Route::get('/page-cart', [HomeController::class, 'page_cart']);

//Trang thanh toán
Route::get('/page-checkout', [HomeController::class, 'page_checkout']);


//--------------------------------------------------------TRANG HỒ SƠ CÁ NHÂN-----------------------------------------------------------//
//Trang hồ sơ
Route::get('/page-infor-user', [HomeController::class, 'page_infor_user']);

//Trang chờ thanh toán
Route::get('/wait-payment', [HomeController::class, 'wait_payment']);

//Trang chờ giao hàng
Route::get('/page-delivery', [HomeController::class, 'page_delivery']);

//Trang đã hủy
Route::get('/page-cancel', [HomeController::class, 'page_cancel']);

//--------------------------------------------------------TRANG ADMIN-----------------------------------------------------------//
// //TRANG ADMIN
Route::get('/page-admin', 'App\Http\Controllers\AdminController@admin')->name('page-admin');

//Trang sản phẩm
Route::get('/list-product', [AdminController::class, 'list_product']);
