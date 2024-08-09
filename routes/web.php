<?php

use App\Http\Controllers\Tester\UserTester;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIfIsAdmin;
use Illuminate\Support\Facades\Route;

//testes curso

Route::middleware('auth')->group(function () {
    Route::get('/users/{user}', [UserTester::class, 'show'])->name('users.show');
    Route::delete('/users/{user}/destroy', [UserTester::class, 'destroy'])->name('users.destroy')->middleware(CheckIfIsAdmin::class);
    Route::get('/users/{user}/edit', [UserTester::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserTester::class, 'update'])->name('users.update');
    Route::get('/users', function () {
        return 'luana';
    });
    Route::get('/users2', [UserTester::class, 'index'])
    ->name('users2.index');
    Route::get('/users3', [UserTester::class, 'index2'])
    ->name('users3.index2');
    Route::get('/users4', [UserTester::class, 'index3'])
    ->name('users4.index3');
    Route::get('/indexy', [UserTester::class, 'indexy'])->name('indexy.indexy');
    Route::get('/users/create', [UserTester::class, 'create'])->name('users.create');
    Route::post('/users/create', [UserTester::class, 'store'])->name('users.store');

});

//testes curso

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
