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
        // Datos para el dashboard
        $payroll = Payroll::where('user_id', Auth::user()->id)->latest()->first();
        $expense_total = Expense::where('user_id', Auth::user()->id)->sum('amount');
        $extraincome_total = number_format($payroll->amount - $expense_total, 2);
        $savings_total = Saving::where('user_id', Auth::user()->id)->sum('amount');
        $targetbalance_total = TargetBalance::where('user_id', Auth::user()->id)->sum('target_balance');
        $deadline = Deadline::where('user_id', Auth::user()->id)->latest()->first();

        // Ahorro Mensual Recomendado
        $now = Carbon::now();
        $deadline_date = Carbon::parse($deadline->deadline);
        $months = round($deadline_date->diffInMonths($now)) * -1;
        $target_balance_diference = $targetbalance_total - $savings_total;
        $savinng_recommended = number_format($target_balance_diference / $months, 2);

        // Ahorro mensual posible
        $savings_possible = number_format($extraincome_total * $months + $savings_total, 2);

        // Progresso de Ahorro
        $progress = ($savings_total / $targetbalance_total) * 100;

        return view('dashboard', compact('payroll', 'expense_total', 'extraincome_total', 'savings_total', 'targetbalance_total', 'deadline', 'savinng_recommended', 'progress', 'savings_possible'));
    }
}
