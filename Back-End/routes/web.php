<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinderController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/binders', [BinderController::class, 'index'])->name('binders.index');
    Route::get('/binders/create', [BinderController::class, 'create'])->name('binders.create');
    Route::post('/binders', [BinderController::class, 'store'])->name('binders.store');
    Route::get('/binders/{binder}', [BinderController::class, 'show'])->name('binders.show');
});

