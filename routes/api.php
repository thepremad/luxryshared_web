<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::any('resend_otp',[AuthController::class,'resendOtp']);

Route::controller(AuthController::class)->group(function () {
    Route::post('/signup', 'signup');
    Route::post('/login', 'login');
    Route::post('/signup-verification', 'signupVerification');
});

Route::controller(ForgetPasswordController::class)->group(function () {
    Route::post('/forgot_password', 'forgotPassword');
    Route::post('/verify_otp', 'verifyOtp');
    Route::post('/create_password', 'createPassword');
    Route::get('unauthorized', function () {
        return response()->json(['statusCode' => 400, 'status' => 'unauthorized', 'message' => 'Unauthorized user.']);
    })->name('api.unauthorized');
});

Route::middleware('auth:api')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'profile');
        Route::post('/profile', 'updateProfile');
        Route::get('/delete_account', 'deleteAccount');
    });
    Route::controller(ListController::class)->group(function () {
        Route::get('/category', 'category');
        Route::get('/subCategory/{id}', 'subCategory');
        Route::get('/brand', 'brand');
        Route::get('/size', 'size');
        Route::get('/color', 'color');
        Route::get('/occasion', 'occasion');
        Route::post('/suggestedDayPrice', 'suggestedDayPrice');
    });
    Route::controller(ItemController::class)->group(function () {
        Route::post('/addListItem', 'addListItem');
        Route::get('/product', 'product');
        Route::post('/day-price', 'dayPrice');
    });
    Route::controller(GeoLocationController::class)->group(function () {
        Route::get('/near-me-products', 'nearMeProducts');

    });
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'home');
        Route::get('/brand-product', 'brandProduct');
        Route::get('/occasion-product', 'occasionProduct');
    });
    Route::controller(ProductFilterController::class)->group(function () {
        Route::post('/filter-home', 'filterHome');
        Route::post('/add-to-cart', 'addTocart');
        Route::get('/shopping-bag', 'shoppingBag');
    });
    Route::controller(CheckoutController::class)->group(function () {
        Route::post('/checkout', 'checkout');
        Route::post('/wishlist', 'wishlist');
        Route::get('/get-wishlist', 'getWishlist');
        Route::get('/remove-wishlist', 'removeWishlist');
        Route::get('/buy', 'buy');
        Route::get('/rent', 'rent');
        Route::get('/menu', 'menu');
    });
    Route::controller(SellingController::class)->group(function () {
        Route::get('/selling', 'selling');
        Route::get('/lending', 'lending');
        Route::post('/discount-code', 'discountCode');
        Route::get('/privacy-policy', 'privacyPolicy');
        Route::get('/comunity', 'comunity');
        Route::get('/city', 'city');
        Route::get('/country', 'country');
        Route::post('/shopping-bag-payment', 'shoppingBagPayment');
        Route::post('/withdrawl-request', 'withdrawlRequest');
        Route::post('/contuct-us', 'contuctUs');
    });
});

