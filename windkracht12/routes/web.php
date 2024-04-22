<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyInviteController;
use App\Http\Controllers\Auth\InviteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// homepage route
Route::get('/', function () {
    return view('welcome');
});
// dashboard route's
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// profile route's
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// invite registration route's
Route::post('/verify-invite', [InviteController::class, 'invite'])
    ->name('verify-invite');
Route::get('/verify-invite/{code}', [VerifyInviteController::class, '__invoke']);

// reservation route's
Route::get('/reservation', function () {
    return view('reservation.create');
});

require __DIR__ . '/auth.php';
