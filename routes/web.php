<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//TRANG CHỦ//Hiển thị trang chủ admin
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//Trang sản phẩm
Route::get('/page-product', [HomeController::class, 'page_product']);

//Trang tin tức
Route::get('/page-news', [HomeController::class, 'page_news']);

//Trang liên lạc
Route::get('/page-contact', [HomeController::class, 'page_contact']);

//Trang about us
Route::get('/page-about', [HomeController::class, 'page_about']);

//Trang đăng nhập
Route::get('/page-login', [HomeController::class, 'page_login'])->name('page_login');

Route::post('/check_login',[HomeController::class,'checkLogin'])->name('checkLogin');
Route::post('/check_signup',[HomeController::class,'check_signup'])->name('check_signup');

//Trang đăng ký
Route::get('/page-signup', [HomeController::class, 'page_signup'])->name('page-signup');

//Trang giỏ hàng
Route::get('/page-cart', [HomeController::class, 'page_cart']);



//--------------------------------------------------------TRANG ADMIN-----------------------------------------------------------//
// //TRANG ADMIN
Route::get('/page-admin', 'App\Http\Controllers\AdminController@admin')->name('page-admin');

//Trang sản phẩm
Route::get('/list-product', [AdminController::class, 'list_product']);
//them loại sản phẩm
Route::get('/add-category', [AdminController::class, 'add_category'])->name('add_category');
Route::post('/post_category', [AdminController::class, 'post_category'])->name('post_category');

// thêm nhà cung cấp sản phẩm
Route::get('add-supplier',[AdminController::class, 'add_supplier'])->name('add_supplier');
Route::post('post-supplier',[AdminController::class, 'post_supplier'])->name('post_supplier');

//hiển thị sản phẩm
Route::get('show-product',[AdminController::class,'show_product'])->name('show_product');

//thêm sản phẩm
Route::get('add-product',[AdminController::class,'add_product'])->name('add_product');
Route::post('post-product',[AdminController::class,'post_product'])->name('post_product');

