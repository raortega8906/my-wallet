<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeadlineRequest;
use App\Models\Deadline;
use Illuminate\Support\Facades\Auth;

class DeadlineController extends Controller
{
    public function index ()
    {
        $deadlines = Deadline::all();

        return view('deadlines.index', compact('deadlines'));
    }

    public function create () 
    {
        return view('deadlines.create');
    }

    public function store (StoreDeadlineRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::user()->id;
        Deadline::create($validated);
        
        return redirect()->route('deadlines.index');
    }

    public function edit (Deadline $deadline)
    {
        return view('deadlines.edit', compact('deadline'));
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
