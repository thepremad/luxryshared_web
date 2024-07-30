<?php

use App\Http\Controllers\Admin\AuthController;
use App\Models\User;
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


// Route::get('/home', function () {
//     return view('frontend.index');
// });
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/', function () {
    $user = new User();
    $firstName = '';
    $lastName = '';
    return view('frontend.register', compact('user', 'firstName', 'lastName'));
});
Route::get('/register', function () {
    $user = new User();
    $firstName = '';
    $lastName = '';
    return view('frontend.register', compact('user', 'firstName', 'lastName'));
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
Route::get('/code-verify/{id}', function ($id) {
    return view('frontend.code-verify', compact('id'));
});
Route::get('/change-pw/{id}', function ($id) {
    return view('frontend.change-pw', compact('id'));
});
Route::get('/pwchanged-succ', function () {
    return view('frontend.pwchanged-succ');
});

Route::get('/google-login', function () {
    return Socialite::driver('google')->redirect();
})->name('google_login');

Route::get('/google-register', function () {
    return Socialite::driver('google')->redirect();
})->name('google_register');

Route::get('/callback', function () {
   
     try {
        $user = Socialite::driver('google')->user();
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Session expired, please try again.');
    }
    $nameParts = explode(' ', $user->name);
    $firstName = $nameParts[0];
    $lastName = isset($nameParts[1]) ? $nameParts[1] : '';
    $check_user = User::where('email', $user->email)->first();
    if ($check_user) {
        return view('frontend.cong-screen');
    } else {
        return view('frontend.register', compact('user', 'firstName', 'lastName'));
    }
})->name('google_register_callback');

Route::get('/register-success', function () {
    return view('frontend.cong-screen');
});

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
Route::get('/optimize-clear', function () {
    try {
        Artisan::call('optimize:clear');
        return ' optimize clear successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
Route::get('/log-delete', function () {
    $logFilePath = storage_path('logs/laravel.log');

    if (File::exists($logFilePath)) {
        File::delete($logFilePath);
        return 'Log file deleted successfully!';
    } else {
        return 'Log file not found.';
    }
});

// lending
Route::get('/log', [AuthController::class, 'log']);
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/cartpage', function () {
    return view('frontend.cartpage');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/category-page', function () {
    return view('frontend.category-page');
});
Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/dashbord-wishlist', function () {
    return view('frontend.dashbord-wishlist');
});
Route::get('/editprofile-dashboard', function () {
    return view('frontend.editprofile-dashboard');
});
Route::get('/editptwo-dashbord', function () {
    return view('frontend.editptwo-dashbord');
});
Route::get('/empty-cart', function () {
    return view('frontend.empty-cart');
});
Route::get('/lending', function () {
    return view('frontend.lending');
});
Route::get('/order-confirmed', function () {
    return view('frontend.order-confirmed');
});
Route::get('/order-confirmed', function () {
    return view('frontend.order-confirmed');
});
Route::get('/product-det', function () {
    return view('frontend.product-det');
});
Route::get('/renting', function () {
    return view('frontend.renting');
});
Route::get('/wishlist-empty', function () {
    return view('frontend.wishlist-empty');
});
Route::get('/wishlist-page', function () {
    return view('frontend.wishlist-page');
});
