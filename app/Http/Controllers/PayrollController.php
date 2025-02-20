<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index ()
    {
        $payrolls = Payroll::all();

        return view('payrolls.index', ['payrolls' => $payrolls]);
    }
}
