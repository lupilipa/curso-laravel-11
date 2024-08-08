<?php

use App\Http\Controllers\Tester\UserTester;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//testes curso
Route::get('/users', function () {
	return 'luana';
});

Route::get('/users2', [UserTester::class, 'index'])
->name('users2.index');

Route::get('/users3', [UserTester::class, 'index2'])
->name('users3.index2');

Route::get('/users4', [UserTester::class, 'index3'])
->name('users4.index3');
//testes curso

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
