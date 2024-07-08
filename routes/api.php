<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\Auth\SocialAuthController;
use App\Http\Controllers\User\GeneralController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'prefix' => 'auth',
], function ($router) {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('signin', [AuthController::class, 'signin']);
    Route::post('signup', [AuthController::class, 'signup']);
    Route::post('password/forget', [AuthController::class, 'forgetPassword']);
    Route::post('password/reset', [AuthController::class, 'resetPassword']);
   ////////////////socialite
    Route::get('login/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
    Route::get('login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
});

Route::group([
    'middleware' => ['tokencheck'],
], function ($router) {
    Route::post('password/change', [AuthController::class, 'changePassword']);

    //////users
     Route::get('getUserProfile', [UserController::class, 'getUserProfile']);
    Route::post('editProfile', [UserController::class, 'editProfile']);
    Route::post('editProfileImage', [UserController::class, 'editProfileImage']);
    Route::delete('deleteAccount', [UserController::class, 'deleteAccount']);
});
////////categories
Route::get('categories', [GeneralController::class, 'all_categories']);
Route::get('areas', [GeneralController::class, 'all_areas']);
//
