<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Expense;
use App\Models\Payroll;
use App\Models\Saving;
use App\Models\TargetBalance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $payroll = Payroll::where('user_id', Auth::id())->latest()->first();
        $expense_total = Expense::where('user_id', Auth::id())->sum('amount');

        $extraincome_total = $payroll->amount - $expense_total;
        $savings_total = Saving::where('user_id', Auth::id())->sum('amount');
        $targetbalance_total = TargetBalance::where('user_id', Auth::id())->sum('target_balance');
        $deadline = Deadline::where('user_id', Auth::id())->latest()->first();

        $now = Carbon::now();
        $deadline_date = Carbon::parse($deadline->deadline);
        $months = max($deadline_date->diffInMonths($now) * -1, 1); // mínimo 1 mes

        $target_balance_diference = $targetbalance_total - $savings_total;
        $savinng_recommended = $target_balance_diference / $months;

        // Ahorro mensual posible
        $savings_possible = ($extraincome_total * $months) + $savings_total;

        // Progreso
        $progress = ($targetbalance_total > 0) ? ($savings_total / $targetbalance_total) * 100 : 0;

        // Formatear antes de pasar a la vista
        return view('dashboard', [
            'payroll'              => $payroll,
            'expense_total'        => number_format($expense_total, 2),
            'extraincome_total'    => number_format($extraincome_total, 2),
            'savings_total'        => number_format($savings_total, 2),
            'targetbalance_total'  => number_format($targetbalance_total, 2),
            'deadline'             => $deadline,
            'savinng_recommended'  => number_format($savinng_recommended, 2),
            'progress'             => number_format($progress, 2),
            'savings_possible'     => number_format($savings_possible, 2),
        ]);
    }
}
