<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LocalStatisticController;

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

Route::get('/register', [FormController::class, 'register'])->name('register');

Route::post('/registration', [FormController::class, 'registration'])->name('registration');

Route::get('/login', [FormController::class, 'login'])->name('login');
Route::post('/dashboard', [FormController::class, 'authenticate'])->name('loginSubmit');
Route::get('/dashboard', [FormController::class, 'dashboard'])->name('dashboard');
Route::get('/form', [FormController::class, 'form'])->name('form');
Route::get('/report', [ReportController::class, 'report'])->name('report');
Route::post('/save-local-statistics', [LocalStatisticController::class, 'store'])->name('save.local.statistics');
Route::get('/download-report', [ReportController::class, 'download'])->name('download.report');
Route::get('/preview/report/{reportId}/{selectedDate}', [ReportController::class, 'previewReport'])->name('preview.report');




Route::middleware(['auth'])->group(function () {
    // Protected route

Route::get('/logout', [FormController::class, 'logout'])->name('logout');

});


