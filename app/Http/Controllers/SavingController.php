<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavingRequest;
use App\Http\Requests\UpdateSavingRequest;
use App\Models\Saving;
use Illuminate\Support\Facades\Auth;

class SavingController extends Controller
{
    public function index ()
    {
        $savings = Saving::all();

        return view('savings.index', compact('savings'));
    }

    public function create () 
    {
        return view('savings.create');
    }

    public function store (StoreSavingRequest $request)
    {
        $savings = Saving::all()->count();

        if ($savings > 0) {
           return redirect()->route('savings.index')->with('success', 'Ahorro ya existe');
        }
        else {

            $validated = $request->validated();
            $validated['name'] = 'Ahorro test';
            $validated['user_id'] = Auth::user()->id;
            
            Saving::create($validated);

            return redirect()->route('savings.index')->with('success', 'Ahorro creado');
        }
    }

    public function edit (Saving $saving)
    {
        return view('savings.edit', compact('saving'));
    }

    public function update (UpdateSavingRequest $request, Saving $saving)
    {
        $validate = $request->validated();
        $validate['name'] = 'Ahorro test';

        $saving->update($validate);

        return redirect()->route('savings.index')->with('success', 'Ahorro actualizado');
    }

    public function destroy (Saving $saving)
    {
        $saving->delete();

        return redirect()->route('savings.index')->with('success', 'Ahorro eliminado');
    }
}
