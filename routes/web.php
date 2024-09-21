<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Frontend\ForgetPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\frontend\ItemController;
use App\Http\Controllers\Frontend\LoginContriller;
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

// // lending
// Route::get('/log', [AuthController::class, 'log']);
// Route::get('/about', function () {
//     return view('frontend.about');
// });
// Route::get('/cartpage', function () {
//     return view('frontend.cartpage');
// });
// Route::get('/about', function () {
//     return view('frontend.about');
// });
// Route::get('/category-page', function () {
//     return view('frontend.category-page');
// });
// Route::get('/checkout', function () {
//     return view('frontend.checkout');
// });
// Route::get('/dashbord-wishlist', function () {
//     return view('frontend.dashbord-wishlist');
// });
// Route::get('/editprofile-dashboard', function () {
//     return view('frontend.editprofile-dashboard');
// });
// Route::get('/editptwo-dashbord', function () {
//     return view('frontend.editptwo-dashbord');
// });
// Route::get('/empty-cart', function () {
//     return view('frontend.empty-cart');
// });
// Route::get('/lending', function () {
//     return view('frontend.lending');
// });
// Route::get('/order-confirmed', function () {
//     return view('frontend.order-confirmed');
// });
// Route::get('/order-confirmed', function () {
//     return view('frontend.order-confirmed');
// });
// Route::get('/product-det', function () {
//     return view('frontend.product-det');
// });
// Route::get('/renting', function () {
//     return view('frontend.renting');
// });
// Route::get('/wishlist-empty', function () {
//     return view('frontend.wishlist-empty');
// });
// Route::get('/wishlist-page', function () {
//     return view('frontend.wishlist-page');
// });


Route::get('/',[LoginContriller::class,'login'])->name('login');
Route::post('login',[LoginContriller::class,'loginCheck'])->name('login');
Route::post('register',[LoginContriller::class,'register'])->name('register');
Route::get('forget-password',[ForgetPasswordController::class,'forgetPassword'])->name('forget_password');
Route::post('forgot-password',[ForgetPasswordController::class,'forgotPassword'])->name('forgot_password');
Route::get('match-otp/{id}',[ForgetPasswordController::class,'matchotpp'])->name('match_otp');
Route::post('match-otp/{id}',[ForgetPasswordController::class,'matchOtp'])->name('match_otp');
Route::get('new-password/{id}',[ForgetPasswordController::class,'newPasswordd'])->name('new_password');
Route::post('new-password/{id}',[ForgetPasswordController::class,'newPassword'])->name('new_password');



Route::middleware(['website'])->group(function () {
    Route::get('/home',[HomeController::class,'home'])->name('home');
    Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about_us');
    Route::get('/faq',[HomeController::class,'faq'])->name('faq');
    Route::get('/list-item',[ItemController::class,'listItem'])->name('list_item');
    Route::get('/privacy-policy',[HomeController::class,'privacyPolicy'])->name('privacy_policy');
    Route::get('/terms-and-conditions',[HomeController::class,'termsAndConditions'])->name('terms_and_conditions');
    Route::post('/save-item',[HomeController::class,'saveItem'])->name('save_item');
    Route::get('/logout',[HomeController::class,'logout'])->name('logout');
});