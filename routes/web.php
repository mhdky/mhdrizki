<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardExperienceController;
use App\Http\Controllers\DashboardProjectController;
use App\Http\Controllers\DashboardServiceController;
use App\Http\Controllers\DashboardSocialController;
use App\Http\Controllers\DashboardYoutubeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/project', DashboardProjectController::class)->middleware('auth');

Route::resource('/dashboard/service', DashboardServiceController::class)->middleware('auth');

Route::resource('/dashboard/contact', DashboardContactController::class)->middleware('auth');

Route::resource('/dashboard/youtube', DashboardYoutubeController::class)->middleware('auth');

Route::resource('/dashboard/social', DashboardSocialController::class)->middleware('auth');

Route::resource('/dashboard/experience', DashboardExperienceControllernpm::class)->middleware('auth');