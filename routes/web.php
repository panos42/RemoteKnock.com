<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/listings/manage', [ListingController::class, 'manage']);
//     // Other routes that require a verified email
// });

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



Route::get('/about', [AboutController::class, 'index'])->name('about');

//  Auto leitourgei gia kapoio logo....
Route::get('/email/verify', function () {
    return view('verification.notice');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/'); // Nomizw oti mexri edw douleuei , gt meta to "click to verify" anoigei to homepage panta...
})->middleware(['auth', 'signed'])->name('verification.verify');

 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
// ////////////////////////////////////////



// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');


// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Forgot Password
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');





