<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//TRANG CHỦ//Hiển thị trang chủ admin
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//Trang sản phẩm
Route::get('/page-product/{id}', [HomeController::class, 'page_product'])->name('page_product');

//Trang chi tiết sản phẩm
Route::get('/product-detail/{id}', [HomeController::class, 'product_detail'])->name('product_detail');

//Trang tin tức
Route::get('/page-news', [HomeController::class, 'page_news']);

//Trang liên lạc
Route::get('/page-contact', [HomeController::class, 'page_contact']);

//Trang about us
Route::get('/page-about', [HomeController::class, 'page_about']);

//Trang đăng nhập
Route::get('/page-login', [HomeController::class, 'page_login'])->name('page_login');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::post('/check-login',[HomeController::class,'check_login'])->name('check_login');

// Route::post('/post-login',[HomeController::class,'post_login']);

Route::post('/check_signup',[HomeController::class,'check_signup'])->name('check_signup');


//Trang đăng ký
Route::get('/page-signup', [HomeController::class, 'page_signup'])->name('page-signup');

//Trang giỏ hàng
Route::get('/page-cart', [HomeController::class, 'page_cart']);

//Trang thanh toán
Route::get('/page-checkout', [HomeController::class, 'page_checkout']);

//rating_product
Route::post('post-rating-star/{userId}/{productId}',[HomeController::class,'postRatingStar'])->name('postRatingStar');
//--------------------------------------------------------TRANG HỒ SƠ CÁ NHÂN-----------------------------------------------------------//
//Trang hồ sơ
Route::get('/page-infor-user', [HomeController::class, 'page_infor_user']);

//Trang chờ thanh toán
Route::get('/wait-payment', [HomeController::class, 'wait_payment']);

//Trang chờ giao hàng
Route::get('/page-delivery', [HomeController::class, 'page_delivery']);

//Trang đã hủy
Route::get('/page-cancel', [HomeController::class, 'page_cancel']);

//them gio hang
Route::get('add-card/{id}',[HomeController::class,'addCard'])->name('addCard');
Route::get('update-cart', [HomeController::class,'updateCart'])->name('getUpdateCart');
Route::get('delete-cart/{id}', [HomeController::class,'getDeleteCart'])->name('getDeleteCart');

//thanhtoan
Route::post('check-out',[HomeController::class,'check_out'])->name('check_out');

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

//add color
Route::get('add-color',[AdminController::class,'add_color'])->name('add_color');
Route::post('post-add-color',[AdminController::class,'post_add_color'])->name('post_add_color');

//luu MSP de tien hanh them chi tiet sp
Route::get('temp-details-product',[AdminController::class,'temp_detail_product'])->name('temp_detail_product');

//them chi tiet san pham nhan id_product tu trang temp
Route::get('add-details-product',[AdminController::class,'add_detail_product'])->name('add_detail_product');
Route::post('post-add-detail-product',[AdminController::class,'post_add_detail_product'])->name('post_add_detail_product');

//edit san pham
Route::get('/edit-product/{id}',[AdminController::class,'edit_product'])->name('edit_product');
Route::post('/post_edit_product/{id}',[AdminController::class,'post_edit_product'])->name('post_edit_product');


//xoa san pham
Route::get('delete-item/{id}',[AdminController::class,'delete_item'])->name('delete_item');
//delete image
Route::post('/delete-image/{id}',[AdminController::class,'delete_image'])->name('delete_image');
//danh sach user
Route::get('/show-user',[AdminController::class,'show_user'])->name('show_user');

//tinh trang don hang
Route::get('/status-order',[AdminController::class,'status_order'])->name('status_order');
//cap nhat tinh trang doin hang
Route::post('/post-status-order/{iddh}',[AdminController::class,'post_status_order'])->name('post_status_order');
