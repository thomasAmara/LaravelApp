<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  
 
// All Listings
Route::get('/', [ListingController::class, 'index']);

//Show create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


//show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update Listings
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listings
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Logout users
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

