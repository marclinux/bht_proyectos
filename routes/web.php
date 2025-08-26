<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::get('/proyectos', [App\Http\Controllers\ProyectoController::class, 'index'])->name('proyectos.index')->middleware(['auth', 'verified']);
Route::get('/proyectos/create', [App\Http\Controllers\ProyectoController::class, 'create'])->name('proyectos.create')->middleware(['auth', 'verified']);
Route::post('/proyectos', [App\Http\Controllers\ProyectoController::class, 'store'])->name('proyectos.store')->middleware(['auth', 'verified']);
Route::get('/proyectos/{id}', [App\Http\Controllers\ProyectoController::class, 'show'])->name('proyectos.show')->middleware(['auth', 'verified']);
Route::get('/proyectos/{id}/edit', [App\Http\Controllers\ProyectoController::class, 'edit'])->name('proyectos.edit')->middleware(['auth', 'verified']);
Route::put('/proyectos/{id}', [App\Http\Controllers\ProyectoController::class, 'update'])->name('proyectos.update')->middleware(['auth', 'verified']);
Route::delete('/proyectos/{id}', [App\Http\Controllers\ProyectoController::class, 'destroy'])->name('proyectos.destroy')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
