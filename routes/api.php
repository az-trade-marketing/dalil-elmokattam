<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\GeneralController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\Auth\SocialAuthController;
use App\Http\Controllers\User\StoreController;

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
    Route::post('login/social', [AuthController::class, 'handleSocialLogin']);

   ////////////////socialite
    // Route::get('login/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('login.facebook');
    // Route::get('login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
    // Route::get('login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
    // Route::get('login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
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
   //reviews route
    Route::post('/review', [ReviewController::class, 'store']);
    Route::post('/review/{review}', [ReviewController::class, 'update']);
    Route::delete('/review/{review}', [ReviewController::class, 'destroy']);
    Route::get('/user-reviews', [ReviewController::class, 'index']);
    //wishlist route
    Route::post('/favorit', [FavoriteController::class, 'store']);
    Route::post('/update-favorit', [FavoriteController::class, 'update']);
    Route::get('/user-favorits', [FavoriteController::class, 'index']);
    ////////////

});
////////categories&tags
Route::get('categories', [GeneralController::class, 'all_categories']);
Route::get('tags', [GeneralController::class, 'all_tags']);
Route::get('zones', [GeneralController::class, 'all_zones']);
///stores
Route::get('stores', [GeneralController::class, 'all_stores']);
Route::get('/stores/search', [GeneralController::class, 'search']);
Route::post('/stores/filter', [GeneralController::class, 'filter']);
   Route::get('/get-nearby-stores', [GeneralController::class, 'getNearbyStores']);

////////helps&support //////contacts
Route::post('contact-us', [GeneralController::class, 'ContactUs']);
Route::post('help-support', [GeneralController::class, 'helpSupport']);

////////add store
Route::post('add-store', [StoreController::class, 'store']);
