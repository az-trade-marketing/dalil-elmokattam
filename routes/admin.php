
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\PermisionsController;
use App\Http\Controllers\Admin\RolesController;

//================== Route Login Admin =========================
Route::get('login', [AdminAuthenticatedSessionController::class, 'login'])->name('AdminFormLogin');
Route::post('/login', [AdminAuthenticatedSessionController::class, 'store'])->name('loginAdmin');
Route::get('forgot-password', [AdminAuthenticatedSessionController::class, 'forgotPassword'])->name('admin.forgotPassword');
Route::post('forgot-password', [AdminAuthenticatedSessionController::class, 'forgotPasswordPost'])->name('admin.forgotPassword.post');
Route::get('reset-password/{token}', [AdminAuthenticatedSessionController::class, 'resetPassword'])->name('admin.resetPassword');
Route::post('reset-password/{token}', [AdminAuthenticatedSessionController::class, 'resetPasswordStore']);


Route::group(['middleware' => 'auth:admin'], function () {

     //Dashboard Controller
   Route::get('dashboard', [DashboardController::class, 'index']);
   Route::resource('users', UserController::class);
   Route::resource('roles', RolesController::class);
   Route::resource('permisions', PermisionsController::class);
});


 // ============================== lang ====================
 Route::get('lang/{lang}', function ($lang) {
    session()->put('lang', $lang);

    return redirect()->back();
});
