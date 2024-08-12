<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;



Route::get('/test1', function () {
    return view('test1');
});

//index
Route::get('/', [AuthController::class, 'index'])->name('login');


//Login
//Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard'); // Adjust the route as needed
    }
    return view('login');
})->name('login');
Route::get('login', function () {
    if (Auth::check()) {
        return redirect('/dashboard'); // Adjust the route as needed
    }
    return view('login');
})->name('login');



Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/registration',[AuthController::class, 'registration'])->name('registration');
Route::post('/registration',[AuthController::class, 'postRegistration'])->name('registration.post');


//CRUD
Route::get('/list', [InfoController::class, 'index'])->name('list.index')->middleware('auth');
Route::get('/add', [InfoController::class, 'create'])->name('add.create')->middleware('auth');
Route::post('/list', [InfoController::class, 'store'])->name('list.store')->middleware('auth');
Route::delete('/list/{id}', [InfoController::class, 'destroy'])->name('list.destroy')->middleware('auth');

Route::get('/profile',[InfoController::class, 'profileInfo'])->name('profile')->middleware('auth');


Route::get('/modify/{id}', [InfoController::class, 'edit'])->name('modify.edit')->middleware('auth');
Route::put('/list/{id}', [InfoController::class, 'update'])->name('list.update')->middleware('auth');
Route::get('/form/{id}', [InfoController::class, 'show'])->name('form.show')->middleware('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');



