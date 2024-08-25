<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BLController;
use App\Http\Controllers\AuthController;



Route::get('/order', function () {
    return view('order');
});

Route::get('/show-order', function () {
    return view('show-order');
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
Route::get('/add-user',[AuthController::class, 'addUser'])->name('add-user');
Route::post('/add-user',[AuthController::class, 'postRegistration'])->name('add-user.post');
Route::get('/users',[AuthController::class, 'showUsers'])->name('users.index');

//User Edit
Route::get('/user-profile/{id}',[AuthController::class, 'userEdit'])->name('user-profile.edit');
Route::put('/user-profile/user-update/{id}',[AuthController::class, 'userUpdate'])->name('user-profile.update');
Route::put('/user-profile/user-password-update/{id}',[AuthController::class, 'userpassUpdate'])->name('user-profile.update.password');

//Profile Edit
Route::get('/profile',[AuthController::class, 'profileEdit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/profile-update/{id}',[AuthController::class, 'profileUpdate'])->name('profile.update')->middleware('auth');
Route::put('/profile/profile-password-update/{id}',[AuthController::class, 'profilepassUpdate'])->name('profile.update.password')->middleware('auth');


//CRUD
Route::get('/list', [BLController::class, 'index'])->name('list.index')->middleware('auth');
Route::get('/add', [BLController::class, 'create'])->name('add.create')->middleware('auth');
Route::post('/list', [BLController::class, 'store'])->name('list.store')->middleware('auth');
Route::delete('/list/{id}', [BLController::class, 'destroy'])->name('list.destroy')->middleware('auth');



Route::get('/modify/{id}', [BLController::class, 'edit'])->name('modify.edit')->middleware('auth');
Route::put('/list/{id}', [BLController::class, 'update'])->name('list.update')->middleware('auth');
Route::get('/form/{id}', [BLController::class, 'show'])->name('form.show')->middleware('auth');
Route::get('/print/{id}', [BLController::class, 'show'])->name('print.show')->middleware('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

