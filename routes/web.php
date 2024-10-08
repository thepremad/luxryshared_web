<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Frontend\EditProfieController;
use App\Http\Controllers\Frontend\ForgetPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ItemController;
use App\Http\Controllers\Frontend\LoginContriller;
use App\Http\Controllers\Frontend\ProductDetailController;
use App\Http\Controllers\Frontend\ProductListController;
use App\Http\Controllers\Frontend\StaticPagesController;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate');
        return 'Migrations executed successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/route-cache', function () {
    try {
        Artisan::call('route:cache');
        return ' routes cached successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/rollback', function () {
    try {
        Artisan::call('migrate:rollback');
        return 'table rollback successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/optimize-clear', function () {
    try {
        Artisan::call('optimize:clear');
        return ' optimize clear successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
// Route::get('/log-delete', function () {
//     $logFilePath = storage_path('logs/laravel.log');

//     if (File::exists($logFilePath)) {
//         File::delete($logFilePath);
//         return 'Log file deleted successfully!';
//     } else {
//         return 'Log file not found.';
//     }
// });

// Route::get('/log', [AuthController::class, 'log']);

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/login', [LoginContriller::class, 'login'])->name('login');
Route::post('login', [LoginContriller::class, 'loginCheck'])->name('login');
Route::post('register', [LoginContriller::class, 'register'])->name('register');
Route::get('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget_password');
Route::post('forgot-password', [ForgetPasswordController::class, 'forgotPassword'])->name('forgot_password');
Route::get('match-otp/{id}', [ForgetPasswordController::class, 'matchotpp'])->name('match_otp');
Route::post('match-otp/{id}', [ForgetPasswordController::class, 'matchOtp'])->name('match_otp');
Route::get('new-password/{id}', [ForgetPasswordController::class, 'newPasswordd'])->name('new_password');
Route::post('new-password/{id}', [ForgetPasswordController::class, 'newPassword'])->name('new_password');

Route::get('product-page_1/{id}/{sub_id}',[ProductListController::class,'categories'])->name('product_list_categories');
    Route::get('product-page_2/{id}/{sub_id}',[ProductListController::class,'ocassions'])->name('product_list_occasions');
    Route::get('product-page_3/{id}/{sub_id}',[ProductListController::class,'category'])->name('product_list_category');
    Route::get('product-page_4/{id}/{sub_id}',[ProductListController::class,'topBrands'])->name('product_list_topbrand');
    Route::get('product-page_5/{id}/{sub_id}',[ProductListController::class,'editorPicture'])->name('editor_picture');
    
    //Route::get('product-color/{id}',[ProductListController::class,'color'])->name('product_list_color');
    //Route::get('product-size/{id}',[ProductListController::class,'size'])->name('product_list_size'); 

    Route::get('/product-filter_1/{id}/{sub_id}',[ProductListController::class,'index'])->name('product_list_filter');

    Route::get('product-detail/{id}',[ProductDetailController::class,'productDetail'])->name('product_detail');

    Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about_us');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/faq-details/{id}', [HomeController::class, 'faqDetails'])->name('faq_details');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy_policy');
    Route::get('/terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('terms_and_conditions');
    Route::get('disclaimer', [StaticPagesController::class, 'desclimer'])->name('desclimer');
    Route::get('not-found', [StaticPagesController::class, 'notFound'])->name('not_found');
    Route::get('legal-policy', [StaticPagesController::class, 'legalPolicy'])->name('legal_policy');
    Route::get('how-to-lend', [StaticPagesController::class, 'howToLend'])->name('how_to_lend');

Route::middleware(['website'])->group(function () {

    
    Route::get('/list-item', [ItemController::class, 'listItem'])->name('list_item');
    Route::post('/save-item', [ItemController::class, 'saveItem'])->name('save_item');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


    // Route::get('product-page_1/{id}', [ProductListController::class, 'categories'])->name('product_list_categories');
    // Route::get('product-page_2/{id}', [ProductListController::class, 'ocassions'])->name('product_list_occasions');
    // Route::get('product-page_3/{id}', [ProductListController::class, 'category'])->name('product_list_category');
    // Route::get('product-page_4/{id}', [ProductListController::class, 'topBrands'])->name('product_list_topbrand');
    // Route::get('product-page_5/{id}', [ProductListController::class, 'getTheLook'])->name('product_list_getthelook');
    // Route::get('product-detail/{id}', [ProductDetailController::class, 'productDetail'])->name('product_detail');

    

    //Route::get('list-item', [ItemController::class, 'listItem'])->name('list_item');
    Route::get('cart', [ProductDetailController::class, 'cart'])->name('cart');
    Route::post('apply-discount', [ProductDetailController::class, 'applyDiscount'])->name('apply_discount');
    Route::get('checkout/{size}/{id}/{rentDay}/{method}', [ProductDetailController::class, 'checkout'])->name('checkout');
    Route::get('remove-item/{id}', [ProductDetailController::class, 'removeItem'])->name('remove_item');
    Route::post('checkouts', [ProductDetailController::class, 'saveCheckout'])->name('save_checkout');
    Route::get('wishlist', [ProductDetailController::class, 'wishlist'])->name('wishlist');
    Route::get('add-to-cart/{id}', [ProductDetailController::class, 'addToCart'])->name('add_to_cart');
    Route::get('remove-wishlist/{id}', [ProductDetailController::class, 'removeWishlist'])->name('remove_wishlist');

    Route::get('not-found', [StaticPagesController::class, 'notFound'])->name('not_found');
    Route::post('charity', [StaticPagesController::class, 'charity'])->name('charity');
    
    Route::get('sharing-is-caring', [StaticPagesController::class, 'sharingIsCaring'])->name('sharing_is_caring');


    Route::get('edit-profile', [EditProfieController::class, 'editProfile'])->name('edit_profile');
    Route::post('update-profile', [EditProfieController::class, 'editWebProfile'])->name('edit_web_profile');
    Route::post('checkout', [EditProfieController::class, 'saveCheckout'])->name('checkout_details');
    Route::get('checkout-success', [EditProfieController::class, 'checkoutSuccess'])->name('checkout_success');
    Route::get('withdrawl-request/{id}', [EditProfieController::class, 'withdrawlRequest'])->name('withdrawl_request');
    Route::get('help', [EditProfieController::class, 'help'])->name('help');
});