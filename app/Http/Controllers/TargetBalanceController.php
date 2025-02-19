<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TargetBalanceController extends Controller
{
    public function index ()
    {
        return view('targetbalances.index');
    }
}
