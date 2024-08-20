<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\CheckIfIsAdmin;

/*Route::get('/user', function () {
    return 'oioioi';
});**/

route::middleware('auth')
    ->prefix('admin')
    ->group(function () {
        route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware(CheckIfIsAdmin::class);
        route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        route::get('/users', [UserController::class, 'index'])->name('users.index');

});


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
