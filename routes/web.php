<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Home;
use App\Http\Controllers\Frontend\About;
use App\Http\Controllers\Frontend\Category;
use App\Http\Controllers\Frontend\ContactUs;
use App\Http\Controllers\Frontend\OrderHistory;
use App\Http\Controllers\Frontend\ProductDetails;
use App\Http\Controllers\Frontend\WishList;
use App\Http\Controllers\Frontend\checkout;





Route::get('/',[Home::class, 'index']);
Route::get('/about_us',[About::class, 'about']);
Route::get('/category',[Category::class, 'category']);
Route::get('/contact_us',[ContactUs::class, 'contact']);
Route::get('/order_history',[OrderHistory::class, 'orderhistory']);
Route::get('/product_details',[ProductDetails::class, 'proddetails']);
Route::get('/wish_list',[WishList::class, 'wishlist']);
Route::get('/checkout',[checkout::class, 'index']);
