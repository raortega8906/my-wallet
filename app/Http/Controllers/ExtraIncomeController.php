<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExtraIncomesRequest;
use App\Http\Requests\UpdateExtraIncomeRequest;
use App\Models\ExtraIncome;
use Illuminate\Support\Facades\Auth;

class ExtraIncomeController extends Controller
{
    public function index ()
    {
        $extraincomes = ExtraIncome::all();

        return view('extraincomes.index', compact('extraincomes'));
    }

    public function create ()
    {
        return view('extraincomes.create');
    }

    public function store (StoreExtraIncomesRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::user()->id;

        ExtraIncome::create($validated);

        return redirect()->route('extraincomes.index')->with('error', 'Ingreso extra creado');
    }

    public function edit (ExtraIncome $extraincome)
    {
        return view('extraincomes.edit', compact('extraincome'));
    }

    public function update (UpdateExtraIncomeRequest $request, ExtraIncome $extraincome) 
    {
        $validated = $request->validated();

        $extraincome->update($validated);

        return redirect()->route('extraincomes.index')->with('success', 'Ingreso extra actualizado');
    }

    public function destroy (ExtraIncome $extraincome)
    {
        $extraincome->delete();

        return redirect()->route('extraincomes.index')->with('error', 'Gasto eliminado');
    }
}
