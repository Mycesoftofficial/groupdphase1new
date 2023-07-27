<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DataEntryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('authentication.login');
});

// Authentication
Route::get('/register',[AuthenticationController::class,'register_index'])->name('register');
