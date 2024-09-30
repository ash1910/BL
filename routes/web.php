<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BLController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AirBLController;






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


//Air BL View
Route::get('/AirBL', [AirBLController::class, 'index'])->name('AirBL')->middleware('auth');
Route::get('/new-AirBL', [AirBLController::class, 'create'])->name('AirBL')->middleware('auth');

// User Authentication
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/add-user',[AuthController::class, 'registration'])->name('add-user')->middleware('auth');
Route::post('/add-user',[AuthController::class, 'postRegistration'])->name('add-user.post')->middleware('auth');
Route::get('/users',[AuthController::class, 'showUsers'])->name('users.index')->middleware('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//User Edit
Route::get('/user-profile/{id}',[AuthController::class, 'userEdit'])->name('user-profile.edit')->middleware('auth');
Route::put('/user-profile/user-update/{id}',[AuthController::class, 'userUpdate'])->name('user-profile.update')->middleware('auth');
Route::put('/user-profile/user-password-update/{id}',[AuthController::class, 'userpassUpdate'])->name('user-profile.update.password')->middleware('auth');

//Profile Edit
Route::get('/profile',[AuthController::class, 'profileEdit'])->name('profile.edit')->middleware('auth')->middleware('auth');
Route::put('/profile/profile-update/{id}',[AuthController::class, 'profileUpdate'])->name('profile.update')->middleware('auth')->middleware('auth');
Route::put('/profile/profile-password-update/{id}',[AuthController::class, 'profilepassUpdate'])->name('profile.update.password')->middleware('auth');

//CRUD BL
Route::get('/bl-list', [BLController::class, 'index'])->name('bl-list.index')->middleware('auth');
Route::get('/new-bl', [BLController::class, 'create'])->name('new-bl.create')->middleware('auth');
Route::post('/bl-list', [BLController::class, 'store'])->name('bl-list.store')->middleware('auth');
Route::delete('/bl-list/{id}', [BLController::class, 'destroy'])->name('bl-list.destroy')->middleware('auth');
Route::get('/modify/{id}', [BLController::class, 'edit'])->name('modify.edit')->middleware('auth');
Route::put('/bl-list/{id}', [BLController::class, 'update'])->name('bl-list.update')->middleware('auth');
Route::get('/show-bl/{id}', [BLController::class, 'show'])->name('show-bl.show')->middleware('auth');
//Clone
Route::get('/clone-bl/{id}', [BLController::class, 'clone'])->name('clone-bl.clone')->middleware('auth');


Route::get('/print-bl/{id}', [BLController::class, 'print'])->name('print-bl.show')->middleware('auth');


//CRUD ORDER
Route::get('/order-list', [OrderController::class, 'index'])->name('order-list.index')->middleware('auth');
Route::get('/add-order', [OrderController::class, 'create'])->name('add-order.create')->middleware('auth');
Route::post('/order-list', [OrderController::class, 'store'])->name('order-list.store')->middleware('auth');
Route::delete('/order-list/{id}', [OrderController::class, 'destroy'])->name('order-list.destroy')->middleware('auth');
Route::get('/modify-order/{id}', [OrderController::class, 'edit'])->name('modify-order.edit')->middleware('auth');
Route::put('/order-list/{id}', [OrderController::class, 'update'])->name('order-list.update')->middleware('auth');
Route::get('/show-order/{id}', [OrderController::class, 'show'])->name('show-order.show')->middleware('auth');
Route::get('/print-order/{id}', [OrderController::class, 'show'])->name('print-order.show')->middleware('auth');

Route::get('/shipping-order', [OrderController::class, 'show1'])->name('shipping-order.show')->middleware('auth');
