<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('event.destroy');

Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');

Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');

Route::get('/event', [EventController::class, 'index'])->name('event.index');

Route::get('event/create', [EventController::class, 'create'])->name('event.create');

Route::post('/event', [EventController::class, 'store'])->name('event.store');

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
