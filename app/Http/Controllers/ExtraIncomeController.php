<?php

namespace App\Http\Controllers;

use App\Models\ExtraIncome;
use Illuminate\Http\Request;

class ExtraIncomeController extends Controller
{
    public function index ()
    {
        $extraincomes = ExtraIncome::all();

        return view('extraincomes.index', ['extraincomes' => $extraincomes]);
    }
}
