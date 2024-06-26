<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'company'])->name('home')->middleware('auth');
Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [UserProfileController::class, 'index'])->name('home-user');
    Route::get('/dashboard-company', [CompanyController::class, 'index'])->name('home-company');
    Route::get('/user-dashboard', [UserProfileController::class, 'userDashboard'])->name('user-dashboard');
    Route::get('/user-profile', [UserProfileController::class,'edit'])->name('user-profile-edit');
    Route::put('/user-profile', [UserProfileController::class,'update'])->name('user-profile-update');
    Route::get('/sign-up-company-static', [PageController::class, 'signupcompany'])->name('sign-up-company-static');
    Route::get('/register-company', [CompanyController::class, 'create'])->name('register-company');
    Route::post('/register-company', [CompanyController::class, 'store'])->name('store-company');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
