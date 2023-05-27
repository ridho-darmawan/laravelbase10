<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;

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

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

Route::get('/optimize', function () {
   Artisan::call('optimize');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

// Route::get('/', function () {
//     return view('layouts.template');
// });
Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::middleware(['admin'])->group(function () {        
        Route::resource('barang', BarangController::class);
    });
});

// Route::middleware(['auth', 'admin'])->group(function () {  
// });

// Route::middleware(['auth', 'manager'])->group(function () {  
// });
