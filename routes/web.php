<?php

use App\Http\Controllers\DeadlineController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExtraIncomeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\TargetBalanceController;
use App\Models\Deadline;
use App\Models\Expense;
use App\Models\ExtraIncome;
use App\Models\Payroll;
use App\Models\Saving;
use App\Models\TargetBalance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// De momento crearé la lógica aquí para mostrar info en el dashboard
Route::get('/dashboard', function () {
    $payroll = Payroll::where('user_id', Auth::user()->id)->latest()->first();
    $expense_total = Expense::where('user_id', Auth::user()->id)->sum('amount');
    $extraincome_total = ExtraIncome::where('user_id', Auth::user()->id)->sum('amount');
    $savings_total = Saving::where('user_id', Auth::user()->id)->sum('amount');
    $targetbalance_total = TargetBalance::where('user_id', Auth::user()->id)->sum('target_balance');
    $deadline = Deadline::where('user_id', Auth::user()->id)->latest()->first();

    return view('dashboard', compact('payroll', 'expense_total', 'extraincome_total', 'savings_total', 'targetbalance_total', 'deadline'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas Plazos
Route::get('deadlines', [DeadlineController::class, 'index'])->name('deadlines.index');
Route::get('deadlines/create', [DeadlineController::class, 'create'])->name('deadlines.create');
Route::post('deadlines', [DeadlineController::class, 'store'])->name('deadlines.store');
Route::get('deadlines/{deadline}/edit', [DeadlineController::class, 'edit'])->name('deadlines.edit');
Route::put('deadlines/{deadline}', [DeadlineController::class, 'update'])->name('deadlines.update');
Route::delete('deadlines/{deadline}', [DeadlineController::class, 'destroy'])->name('deadlines.delete');

// Rutas Gastos
Route::get('expenses', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::put('expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::delete('expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.delete');

// Rutas Entradas Extras
Route::get('extraincomes', [ExtraIncomeController::class, 'index'])->name('extraincomes.index');
Route::get('extraincomes/create', [ExtraIncomeController::class, 'create'])->name('extraincomes.create');
Route::post('extraincomes', [ExtraIncomeController::class, 'store'])->name('extraincomes.store');
Route::get('extraincomes/{extraincome}/edit', [ExtraIncomeController::class, 'edit'])->name('extraincomes.edit');
Route::put('extraincomes/{extraincome}', [ExtraIncomeController::class, 'update'])->name('extraincomes.update');
Route::delete('extraincomes/{extraincome}', [ExtraIncomeController::class, 'destroy'])->name('extraincomes.delete');

// Rutas Nómina
Route::get('payrolls', [PayrollController::class, 'index'])->name('payrolls.index');
Route::get('payrolls/create', [PayrollController::class, 'create'])->name('payrolls.create');
Route::post('payrolls', [PayrollController::class, 'store'])->name('payrolls.store');
Route::get('payrolls/{payroll}/edit', [PayrollController::class, 'edit'])->name('payrolls.edit');
Route::put('payrolls/{payroll}', [PayrollController::class, 'update'])->name('payrolls.update');
Route::delete('payrolls/{payroll}', [PayrollController::class, 'destroy'])->name('payrolls.delete');

// Rutas Ahorros
Route::get('savings', [SavingController::class, 'index'])->name('savings.index');
Route::get('savings/create', [SavingController::class, 'create'])->name('savings.create');
Route::post('savings', [SavingController::class, 'store'])->name('savings.store');
Route::get('savings/{saving}/edit', [SavingController::class, 'edit'])->name('savings.edit');
Route::put('savings/{saving}', [SavingController::class, 'update'])->name('savings.update');
Route::delete('savings/{saving}', [SavingController::class, 'destroy'])->name('savings.delete');

// Rutas Saldo Objetivo
Route::get('targetbalances', [TargetBalanceController::class, 'index'])->name('targetbalances.index');
Route::get('targetbalances/create', [TargetBalanceController::class, 'create'])->name('targetbalances.create');
Route::post('targetbalances', [TargetBalanceController::class, 'store'])->name('targetbalances.store');
Route::get('targetbalances/{targetbalance}/edit', [TargetBalanceController::class, 'edit'])->name('targetbalances.edit');
Route::put('targetbalances/{targetbalance}', [TargetBalanceController::class, 'update'])->name('targetbalances.update');
Route::delete('targetbalances/{targetbalance}', [TargetBalanceController::class, 'destroy'])->name('targetbalances.delete');

require __DIR__.'/auth.php';
