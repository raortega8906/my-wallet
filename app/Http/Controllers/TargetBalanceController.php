<?php

namespace App\Http\Controllers;

use App\Models\TargetBalance;
use Illuminate\Http\Request;

class TargetBalanceController extends Controller
{
    public function index ()
    {
        $targetbalances = TargetBalance::all();

        return view('targetbalances.index', ['targetbalances' => $targetbalances]);
    }
}
