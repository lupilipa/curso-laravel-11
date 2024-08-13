<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

/*Route::get('/user', function () {
    return 'oioioi';
});**/

route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
route::post('/users', [UserController::class, 'store'])->name('users.store');

// essa rota ta puxando a action do create
route::get('/users/create', [UserController::class, 'create'])->name('users.create');

route::get('/users', [UserController::class, 'index'])->name('users.index');

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
