<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BandController;
use App\http\Controllers\UserController;
use App\Models\Band;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* BAND SECTION */

// All Listings
Route::get('/', [BandController::class, 'index']);
// Scope Filter Listing
Route::get('/', ['index', 'bands' => Band::lastest()->filter()]);
// Show Create Form
Route::get('/bands/create', [BandController::class, 'create'])->middleware('auth');
// Store Bands Data
Route::post('/bands', [BandController::class, 'store'])->middleware('auth');
// Show Edit Form
Route::get('/bands/{band}/edit', [BandController::class, 'edit'])->middleware('auth');
// Update Band(s)
Route::put('/bands/{band}', [BandController::class, 'update'])->middleware('auth');
// Delete Band(s)
Route::delete('/bands/{band}', [BandController::class, 'destroy'])->middleware('auth');
// Manage Band(s)
Route::get('/bands/manage', [BandController::class, 'manage'])->middleware('auth');
// Single Band(s)
Route::get('/bands/{band}', [BandController::class, 'show']);


/* USER SECTION */

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// Create User
Route::post('/users', [UserController::class, 'store']);
// Read (logout)
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// Read (login)
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// Authenticate 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
// Delete