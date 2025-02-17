<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

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

// Authentication Routes

// Registration Routes
Route::get("/register", [AuthController::class, "register"] )->name('register');
Route::post("/register", [AuthController::class, "registerPost"] )->name('register.post');

// Login Routes
Route::get("/login", [AuthController::class, "login"] )->name('login');
Route::post("/login", [AuthController::class, "loginPost"] )->name('login.post');

// Dashboard & Logout
Route::get("/", [AuthController::class, "dashboard"] )->name('dashboard');
Route::get("/logout", [AuthController::class, "logout"] )->name('logout');