<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'loginView')->name('login');
    Route::post('loginPost', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware(['admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('/', 'dashboard');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('approve-request/{id}', 'approveRequest')->name('user.approve');
        Route::get('reject-request/{id}', 'rejectRequest')->name('user.disapprove');
        Route::get('register-request', 'registerRequest')->name('user.register_request');
        Route::get('user-profle/{id}', 'profile')->name('user.profile');
        Route::get('user-delete/{id}', 'edit')->name('user.delete');
        Route::post('user-serach', 'userSerach')->name('user.serach');
    });

    Route::resource('categories',CategoryController::class);
    Route::resource('subcategories',SubCategoryController::class);
    Route::resource('images',ImageController::class);
    Route::resource('sizes',SizeController::class);
    Route::resource('countries',CountryController::class);
    Route::resource('cities',CityController::class);
    Route::resource('faq',FaqController::class);
    Route::resource('user',UserController::class);

Route::controller(TermsAndConditionsController::class)->group(function () {
    Route::get('/delivery', 'delivry')->name('deliveries.delivry');
    Route::post('/delivery', 'saveDelivry')->name('deliveries.store');
    Route::get('/terms-and-condetions', 'termsAndConditions')->name('terms_condetion.get_terms');
    Route::post('/save-terms-and-condetions', 'saveTermsAndCondetions')->name('terms_condetion.save_terms');
    Route::get('/privacy-policy', 'privacyPolicies')->name('privacy_policies.get_policies');
    Route::post('/save-privicy-policy', 'saveDelivry')->name('privacy_policies.save_policies');
});

    
});
