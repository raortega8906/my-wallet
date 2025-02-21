<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use Illuminate\Http\Request;

class DeadlineController extends Controller
{
    public function index ()
    {
        $deadlines = Deadline::all();

        return view('deadlines.index', ['deadlines' => $deadlines]);
    }

    public function create () 
    {
        return view('deadlines.create');
    }

    public function store ()
    {
        //
    }

    public function edit (Deadline $deadline)
    {
        return view('deadlines.edit', ['deadlines' => $deadline]);
    }

    public function update ()
    {
        //
    }

    public function destroy ()
    {
        //
    }
}
