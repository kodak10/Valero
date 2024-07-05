<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;


Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/my_account', [WebsiteController::class, 'my_account'])->name('register');
Route::get('/login', [WebsiteController::class, 'my_account'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register', [UserController::class, 'store'])->name('register.store');


Route::post('/', [WebsiteController::class, 'searchByImage'])->name('search.by.image');


// Route::prefix('administration')->middleware(['auth', 'role:serviceClient'])->group(function () {
Route::prefix('administration')->group(function () {
    Route::get('/', [AdministrationController::class, 'index']);
    
    // route des categories
    Route::resource('/categories', CategoriesController::class);
    // route des articles
    Route::resource('/articles', ArticlesController::class);

});


Route::middleware('auth')->group(function () {
    Route::post('/wishlist', [WishController::class, 'store'])->name('wishlist.store');
    Route::delete('/wishlist/{id}', [WishController::class, 'destroy'])->name('wishlist.destroy');


    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{item}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

});