<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Dit bestand definieert alle web routes voor de Evenementenplanner.
| Routes worden gegroepeerd op basis van hun functionaliteit en beveiliging.
|
*/

// Home Route: Verwijst naar de evenementen indexpagina
Route::get('/', [EventController::class, 'index'])
    ->middleware(['auth'])
    ->name('home');

// Dashboard Route: Standaard dashboardpagina voor geverifieerde gebruikers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Event Routes: CRUD-functionaliteiten voor evenementenbeheer
Route::resource('events', EventController::class)
    ->middleware(['auth']);

/*
|--------------------------------------------------------------------------
| Profielbeheer Routes
|--------------------------------------------------------------------------
|
| Routes voor gebruikersprofiel, inclusief bewerken, bijwerken en verwijderen.
| Alleen toegankelijk voor ingelogde gebruikers.
|
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Logout Route: Afhandelen van uitlogfunctie
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Auth Routes: Standaard authenticatieroutes van Laravel
require __DIR__.'/auth.php';