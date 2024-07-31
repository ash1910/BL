<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;



Route::get('/test1', function () {
    return view('test1');
});

//index
Route::get('/',[InfoController::class, 'index'])->name('dashboard');



//CRUD
Route::get('/dashboard', [InfoController::class, 'index'])->name('dashboard.index');
Route::get('/add', [InfoController::class, 'create'])->name('add.create');
Route::post('/dashboard', [InfoController::class, 'store'])->name('dashboard.store');
Route::delete('/dashboard/{id}', [InfoController::class, 'destroy'])->name('dashboard.destroy');


Route::get('/modify/{id}', [InfoController::class, 'edit'])->name('modify.edit');
Route::put('/dashboard/{id}', [InfoController::class, 'update'])->name('dashboard.update');
Route::get('/form/{id}', [InfoController::class, 'show'])->name('form.show');



