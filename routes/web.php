<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\HomeController;


use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Settings\SettingsController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/', function () {
//     return Inertia::render('Main', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('User/Main/MainPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {


//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
});



//------ User SIDE ROUTE ------//
Route::get('home', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);



//------ Admin SIDE ROUTE ------//
Route::get('userPage', [DashboardController::class, 'UserPage'])->name('user.page'); //TEMPORARY LA INI PARA LA MADAGMIT PAG KADTO USER HOME PAGE 

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('settings', [SettingsController::class, 'index'])->name('general.settings');
Route::get('home.settings', [SettingsController::class, 'showHomeSettings'])->name('home.settings');