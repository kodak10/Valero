<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ArticlesController;


Route::get('/', [WebsiteController::class, 'index']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/my_account', [WebsiteController::class, 'my_account']);


// Route::prefix('administration')->middleware(['auth', 'role:serviceClient'])->group(function () {
Route::prefix('administration')->group(function () {
    Route::get('/', [AdministrationController::class, 'index']);
    
    // route des categories
    Route::resource('/categories', CategoriesController::class);
    // route des articles
    Route::resource('/articles', ArticlesController::class);

});