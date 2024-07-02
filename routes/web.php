<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/register', function () {
    return view('frontend.register');
});
Route::get('/forgotpw', function () {
    return view('frontend.forgotpw');
});
Route::get('/list-itemone', function () {
    return view('frontend.list-itemone');
});
Route::get('/list-itemtwo', function () {
    return view('frontend.list-itemtwo');
});
Route::get('/list-itemsucc', function () {
    return view('frontend.list-itemsucc');
});
Route::get('/cong-screen', function () {
    return view('frontend.cong-screen');
});
Route::get('/editprofile-dashboard', function () {
    return view('frontend.editprofile-dashboard');
});
Route::get('/editptwo-dashbord', function () {
    return view('frontend.editptwo-dashbord');
});
Route::get('/dashbord-wishlist', function () {
    return view('frontend.dashbord-wishlist');
});
Route::get('/lending', function () {
    return view('frontend.lending');
});
Route::get('/renting', function () {
    return view('frontend.renting');
});
Route::get('/category', function () {
    return view('frontend.category-page');
});
Route::get('/product-detail', function () {
    return view('frontend.product-det');
});
Route::get('/cartpage', function () {
    return view('frontend.cartpage');
});
Route::get('/order-confirmed', function () {
    return view('frontend.order-confirmed');
});
Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/empty-cart', function () {
    return view('frontend.empty-cart');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/wishlist-page', function () {
    return view('frontend.wishlist-page');
});
Route::get('/wishlist-empty', function () {
    return view('frontend.wishlist-empty');
});
// wishlist-empty

Route::get('/code-verify', function () {
    return view('frontend.code-verify');
});
Route::get('/change-pw', function () {
    return view('frontend.change-pw');
});
Route::get('/pwchanged-succ', function () {
    return view('frontend.pwchanged-succ');
});