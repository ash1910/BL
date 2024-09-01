<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BLController;
use App\Http\Controllers\OrderController;






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


// User Authentication
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/add-user',[AuthController::class, 'registration'])->name('add-user');
Route::post('/add-user',[AuthController::class, 'postRegistration'])->name('add-user.post');
Route::get('/users',[AuthController::class, 'showUsers'])->name('users.index');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//User Edit
Route::get('/user-profile/{id}',[AuthController::class, 'userEdit'])->name('user-profile.edit');
Route::put('/user-profile/user-update/{id}',[AuthController::class, 'userUpdate'])->name('user-profile.update');
Route::put('/user-profile/user-password-update/{id}',[AuthController::class, 'userpassUpdate'])->name('user-profile.update.password');

//Profile Edit
Route::get('/profile',[AuthController::class, 'profileEdit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/profile-update/{id}',[AuthController::class, 'profileUpdate'])->name('profile.update')->middleware('auth');
Route::put('/profile/profile-password-update/{id}',[AuthController::class, 'profilepassUpdate'])->name('profile.update.password')->middleware('auth');

//CRUD BL
Route::get('/list', [BLController::class, 'index'])->name('list.index')->middleware('auth');
Route::get('/add', [BLController::class, 'create'])->name('add.create')->middleware('auth');
Route::post('/list', [BLController::class, 'store'])->name('list.store')->middleware('auth');
Route::delete('/list/{id}', [BLController::class, 'destroy'])->name('list.destroy')->middleware('auth');
Route::get('/modify/{id}', [BLController::class, 'edit'])->name('modify.edit')->middleware('auth');
Route::put('/list/{id}', [BLController::class, 'update'])->name('list.update')->middleware('auth');
Route::get('/form/{id}', [BLController::class, 'show'])->name('form.show')->middleware('auth');
//Clone
Route::get('/clone-bl/{id}', [BLController::class, 'clone'])->name('clone-bl.clone')->middleware('auth');


Route::get('/print/{id}', [BLController::class, 'print'])->name('print.show')->middleware('auth');


//CRUD ORDER
Route::get('/order-list', [OrderController::class, 'index'])->name('order-list.index')->middleware('auth');
Route::get('/add-order', [OrderController::class, 'create'])->name('add-order.create')->middleware('auth');
Route::post('/order-list', [OrderController::class, 'store'])->name('order-list.store')->middleware('auth');
Route::delete('/order-list/{id}', [OrderController::class, 'destroy'])->name('order-list.destroy')->middleware('auth');
Route::get('/modify-order/{id}', [OrderController::class, 'edit'])->name('modify-order.edit')->middleware('auth');
Route::put('/order-list/{id}', [OrderController::class, 'update'])->name('order-list.update')->middleware('auth');
Route::get('/show-order/{id}', [OrderController::class, 'show'])->name('show-order.show')->middleware('auth');
Route::get('/print-order/{id}', [OrderController::class, 'show'])->name('print-order.show')->middleware('auth');
