<?php

namespace App\Http\Controllers;

use App\Models\Saving;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    public function index ()
    {
        $savings = Saving::all();

        return view('savings.index', ['savings' => $savings]);
    }
}
