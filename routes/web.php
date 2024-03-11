<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\EventController as AdminEvent;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\user\EventController as UserEvent;
use Illuminate\Support\Facades\Route;


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

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/',[UserEvent::class, 'index']);
Route::resource('events',AdminEvent::class);
Route::resource('users',UserController::class);
Route::prefix('admin')->group(function () {
    Route::resource('categories',CategoryController::class);
});
Route::post('reservation/{user}', [ReservationController::class, 'store'])->name('reservation');
Route::post('submit', [UserController::class, 'submitOrganizerRequest'])->name('organizer');
Route::get('showRequests', [UserController::class, 'showRequests'])->name('requestOrganizer');
Route::get('AcceptRequests/{id}', [UserController::class, 'AcceptOrganizer'])->name('AcceptOrganizer');
Route::get('RejectRequests/{id}', [UserController::class, 'RejectOrganizer'])->name('RejectOrganizer');
Route::get('MyEvents/{id}',[UserController::class, 'showCreatedEvents'])->name('MyEvents');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
