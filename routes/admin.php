<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'loginView')->name('login');
    Route::post('loginPost', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('edit-user-profile', 'editProfile')->name('user.edit_profile');
    Route::post('update-admin-profile', 'updateAdminProfile')->name('user.update_admin_profile');

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
    Route::resource('brands',BrandController::class);
    Route::resource('menus',MenuController::class);
    Route::resource('colors',ColorController::class);
    Route::resource('products',ProductController::class);
    Route::resource('occasions',OccasionController::class);
    Route::resource('comunities',ComunityController::class);
    Route::resource('inquiries',InquiryController::class);
    Route::resource('blogs',BlogController::class);
    Route::resource('presses',PressController::class);
    Route::resource('terms_and_condetions',TermsAndConditionsController::class);

    Route::controller(ProductController::class)->group(function () {
        Route::get('products-request', 'productRequest')->name('products.request');
        Route::get('products-approve/{id}', 'productApprove')->name('products.approve');
        Route::get('products-reject/{id}', 'productReject')->name('products.reject');
        Route::get('remove-image/{id}', 'removeImage')->name('products.remove_image');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('categories-items/{id}', 'items')->name('categories.item');
    });

Route::controller(TermsAndConditionsController::class)->group(function () {
    Route::get('/delivery', 'delivry')->name('deliveries.delivry');
    Route::post('/delivery', 'saveDelivry')->name('deliveries.store');
    Route::get('/terms-and-condetions', 'termsAndConditions')->name('terms_condetion.get_terms');
    Route::post('/save-terms-and-condetions', 'saveTermsAndCondetions')->name('terms_condetion.save_terms');
    Route::get('/privacy-policy', 'privacyPolicies')->name('privacy_policies.get_policies');
    Route::post('/save-privicy-policy', 'savePrivacty')->name('privacy_policies.save_policies');
}); 
});
