<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/my_account', [WebsiteController::class, 'my_account']);

Route::get('/admin', [WebsiteController::class, 'adminDashboard']);
