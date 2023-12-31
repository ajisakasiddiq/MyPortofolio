<?php

use App\Http\Controllers\admin\DashbordController;
use App\Http\Controllers\admin\Homecontroller as AdminHomecontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BootcampController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

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

Route::get('/dash', function () {
    return view('pages.dashboardhome');
});

Route::prefix('admin')
    // ->middleware('auth', 'checkrole:admin')
    ->namespace('App\Http\Controllers\admin')
    ->group(function () {
        Route::get('/', [DashbordController::class, 'index'])->name('dashboard');
        Route::get('/home', [AdminHomecontroller::class, 'index'])->name('admin-home');
    });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/bootcamp', [BootcampController::class, 'index'])->name('bootcamp');
