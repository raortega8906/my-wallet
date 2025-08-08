<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeadlineRequest;
use App\Http\Requests\UpdateDeadlineRequest;
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
        $deadlines = Deadline::all()->count();

        if ($deadlines > 0) {
           return redirect()->route('deadlines.index')->with('success', 'Fecha objetivo ya existente');
        }
        else {

            $validated = $request->validated();
            $validated['user_id'] = Auth::user()->id;
            
            Deadline::create($validated);

            return redirect()->route('deadlines.index')->with('success', 'Fecha objetivo creada');
        }
    }

    public function edit (Deadline $deadline)
    {
        return view('deadlines.edit', compact('deadline'));
    }

    public function update (UpdateDeadlineRequest $request, Deadline $deadline)
    {
        $validate = $request->validated();

        $deadline->update($validate);

        return redirect()->route('deadlines.index')->with('success', 'Fecha objetivo actualizada');
    }

    public function destroy (Deadline $deadline)
    {
        $deadline->delete();

        return redirect()->route('deadlines.index')->with('success', 'Fecha objetivo eliminada');
    }
}
