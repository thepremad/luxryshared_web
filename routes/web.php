<?php

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


// Route::get('/home', function () {
//     return view('frontend.index');
// });
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/', function () {
    return view('frontend.register');
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
Route::get('/code-verify/{id}', function ($id) {
    return view('frontend.code-verify', compact('id'));
});
Route::get('/change-pw/{id}', function ($id) {
    return view('frontend.change-pw', compact('id'));
});
Route::get('/pwchanged-succ', function () {
    return view('frontend.pwchanged-succ');
});
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
