<?php

use App\Http\Controllers\DeadlineController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExtraIncomeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\TargetBalanceController;
use Illuminate\Support\Facades\Route;

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

// Rutas Plazos
Route::get('deadlines', [DeadlineController::class, 'index'])->name('deadlines.index');

// Rutas Gastos
Route::get('expenses', [ExpenseController::class, 'index'])->name('expenses.index');

// Rutas Entradas Extras
Route::get('extraincomes', [ExtraIncomeController::class, 'index'])->name('extraincomes.index');

// Rutas Nómina
Route::get('payrolls', [PayrollController::class, 'index'])->name('payrolls.index');

// Rutas Ahorros
Route::get('savings', [SavingController::class, 'index'])->name('savings.index');

// Rutas Saldo Objetivo
Route::get('targetbalances', [TargetBalanceController::class, 'index'])->name('targetbalances.index');

require __DIR__.'/auth.php';
