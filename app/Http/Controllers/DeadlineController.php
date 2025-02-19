<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeadlineController extends Controller
{
    public function index ()
    {
        return view('deadlines.index');
    }
}
