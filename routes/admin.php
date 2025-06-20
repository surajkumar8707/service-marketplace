<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomePageCarouselController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/

// Admin routes
Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'adminLogin'])->name('login.post');
Route::any('/logout', [LoginController::class, 'adminLogout'])->name('logout');

// Authenticated routes
Route::middleware('role:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile', [AdminController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/change-password', [AdminController::class, 'changePassword'])->name('password');
    Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('update.password');
    Route::get('/setting', [AdminController::class, 'setting'])->name('setting');
    Route::post('/setting-update/{id}', [AdminController::class, 'settingUpdate'])->name('setting.update');

    Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');

    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [CategoryController::class, 'delete'])->name('destroy');
    });

    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [ServiceController::class, 'edit'])->name('edit');
        Route::put('/update/{category}', [ServiceController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [ServiceController::class, 'delete'])->name('destroy');
    });

    Route::get('/social-media', [AdminController::class, 'socialMedia'])->name('social.media');
    Route::post('/social-media-update/{id}', [AdminController::class, 'socialMediaUpdate'])->name('social.media.update');

    // Pages
    Route::group(['prefix' => '/pages', 'as' => 'pages.'], function () {
        Route::get('/about', [AdminController::class, 'aboutPage'])->name('about');
        Route::get('/our-room', [AdminController::class, 'ourRoomPage'])->name('our.room');
        Route::get('/gallery', [AdminController::class, 'galleryPage'])->name('gallery');
    });

    // home page carousel
    Route::resource('home-page-carousel', HomePageCarouselController::class);

    // ajax request
    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function (){
            Route::post('/home-page-carousel-change-status', [HomePageCarouselController::class, 'changeStatus'])->name('home.page.carousel.change.status');
            Route::post('/category-change-status', [CategoryController::class, 'changeStatus'])->name('category.change.status');
            Route::post('/service-change-status', [ServiceController::class, 'changeStatus'])->name('service.change.status');
    });
});
