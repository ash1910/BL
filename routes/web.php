<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;



Route::get('/test1', function () {
    return view('test1');
});

//index
Route::get('/', [AuthController::class, 'index'])->name('login');


//Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/account',[AuthController::class, 'accountInfo'])->name('account');
Route::get('/registration',[AuthController::class, 'registration'])->name('registration');
Route::post('/registration',[AuthController::class, 'postRegistration'])->name('registration.post');


//CRUD
//Route::get('/dashboard', [InfoController::class, 'index'])->name('dashboard.index');
Route::get('/add', [InfoController::class, 'create'])->name('add.create');
Route::post('/dashboard', [InfoController::class, 'store'])->name('dashboard.store');
Route::delete('/dashboard/{id}', [InfoController::class, 'destroy'])->name('dashboard.destroy');


Route::get('/modify/{id}', [InfoController::class, 'edit'])->name('modify.edit');
Route::put('/dashboard/{id}', [InfoController::class, 'update'])->name('dashboard.update');
Route::get('/form/{id}', [InfoController::class, 'show'])->name('form.show');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



