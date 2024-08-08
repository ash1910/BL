<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;



Route::get('/test1', function () {
    return view('test1');
});

//index
Route::get('/',[InfoController::class, 'index'])->name('dashboard');
//Route::get('/', [SessionController::class, 'create'])->name('login');

//Login
//Route::get('/',[SessionController::class, 'index'])->name('dashboard.index');
Route::get('/login', [SessionController::class, 'create'])->name('login.create');
Route::post('/login', [SessionController::class, 'store'])->name('dashboard.store');
//Route::get('/profile', [SessionController::class, 'store'])->middleware('login');
Route::get('/account',[AuthController::class, 'accountInfo'])->name('account');
Route::get('/registration',[AuthController::class, 'create'])->name('registration');
Route::post('/registration',[AuthController::class, 'store'])->name('registration');


//CRUD
Route::get('/dashboard', [InfoController::class, 'index'])->name('dashboard.index');
Route::get('/add', [InfoController::class, 'create'])->name('add.create');
Route::post('/dashboard', [InfoController::class, 'store'])->name('dashboard.store');
Route::delete('/dashboard/{id}', [InfoController::class, 'destroy'])->name('dashboard.destroy');


Route::get('/modify/{id}', [InfoController::class, 'edit'])->name('modify.edit');
Route::put('/dashboard/{id}', [InfoController::class, 'update'])->name('dashboard.update');
Route::get('/form/{id}', [InfoController::class, 'show'])->name('form.show');



