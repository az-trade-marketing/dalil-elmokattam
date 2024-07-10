
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;

//================== Route Login Admin =========================
Route::get('login', [AdminAuthenticatedSessionController::class, 'login'])->name('AdminFormLogin');
Route::post('/login', [AdminAuthenticatedSessionController::class, 'store'])->name('loginAdmin');
Route::post('/logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logoutAdmin');
Route::get('forgot-password', [AdminAuthenticatedSessionController::class, 'forgotPassword'])->name('admin.forgotPassword');
Route::post('forgot-password', [AdminAuthenticatedSessionController::class, 'forgotPasswordPost'])->name('admin.forgotPassword.post');
Route::get('reset-password/{token}', [AdminAuthenticatedSessionController::class, 'resetPassword'])->name('admin.resetPassword');
Route::post('reset-password/{token}', [AdminAuthenticatedSessionController::class, 'resetPasswordStore']);


Route::group(['middleware' => 'auth:admin'], function () {

    // ============================== dashboard ====================
    Route::get('dashboard', [DashboardController::class, 'index']);
    // ============================== roles ====================
    Route::resource('users', UserController::class);
    Route::resource('roles', RolesController::class);
    Route::get('roles-get-data', [RolesController::class, 'data']);
    // ============================== permissions ====================
    Route::resource('permissions', PermissionsController::class);
    Route::get('permissions-get-data', [PermissionsController::class, 'data']);
    // ============================== categories ====================
    Route::resource('categories', CategoryController::class);
    Route::get('cat-data', [CategoryController::class, 'cat_cat']);
    // ============================== areas ====================
    Route::resource('areas', AreaController::class);
    Route::get('get-data', [AreaController::class, 'data']);
    // ============================== features ====================
    Route::resource('features', FeatureController::class);
    Route::get('features-get-data', [FeatureController::class, 'data']);
    // ==============================  ====================
    Route::get("view-test", function () {
        $script_datatable = true;
        return view("admin.categories.index", compact('script_datatable'));
    });
    // ============================== lang ====================

    Route::post('/user/language', [AdminController::class, 'updateLanguage'])->name('user.language.update');
});


// ============================== lang ====================
Route::get('lang/{lang}', function ($lang) {
    session()->put('lang', $lang);

    return redirect()->back();
});
