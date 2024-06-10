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
Route::controller(AuthController::class)->group(function () {
    Route::post('/signup', 'signup');
    Route::post('/login', 'login');
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
        Route::post('/suggestedDayPrice', 'suggestedDayPrice');
    });
    Route::controller(ItemController::class)->group(function () {
        Route::post('/addListItem', 'addListItem');
    });
});

