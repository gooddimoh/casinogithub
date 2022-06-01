<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware([\App\Http\Middleware\Authenticate::class])->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminPanelController::class, 'index'])->middleware('auth');
    Route::get('/adminpanel', [\App\Http\Controllers\AdminPanelController::class, 'index'])->middleware('auth');
    Route::get('/adminpanel/listofallusers/', [\App\Http\Controllers\AdminPanelController::class, 'listofallusers'])->middleware('auth');
    Route::get('/adminpanel/user/edit/', [\App\Http\Controllers\AdminPanelController::class, 'index'])->middleware('auth');
    Route::get('/adminpanel/user/create/', [\App\Http\Controllers\AdminPanelController::class, 'index'])->middleware('auth');
    Route::get('/adminpanel/user/delete/', [\App\Http\Controllers\AdminPanelController::class, 'index'])->middleware('auth');
});
Route::get('/copyunicallink', [\App\Http\Controllers\CasinoDashboardController::class, 'index']);
Route::get('/deactivationunicallink', [\App\Http\Controllers\CasinoDashboardController::class, 'index']);
Route::get('/imfeelinglucky', [\App\Http\Controllers\CasinoDashboardController::class, 'index']);
Route::get('/History', [\App\Http\Controllers\CasinoDashboardController::class, 'index']);
Route::get('/casinoplay', [\App\Http\Controllers\CasinoDashboardController::class, 'index']);
Route::get('/', [\App\Http\Controllers\CasinoDashboardController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\CostumeAuthentificationController::class, 'login']);
Route::get('/registration', [\App\Http\Controllers\CostumeAuthentificationController::class, 'registration']);

Auth::routes(['login', 'registration']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
