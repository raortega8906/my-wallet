<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTargetBalancRequest;
use App\Http\Requests\UpdateTargetBalanceRequest;
use App\Models\TargetBalance;
use Illuminate\Support\Facades\Auth;

class TargetBalanceController extends Controller
{
    public function index ()
    {
        $targetbalances = TargetBalance::all();

        return view('targetbalances.index', compact('targetbalances'));
    }

    public function create () 
    {
        return view('targetbalances.create');
    }

    public function store (StoreTargetBalancRequest $request)
    {
        $targetbalances = TargetBalance::all()->count();

        if ($targetbalances > 0) {
           return redirect()->route('targetbalances.index')->with('success', 'Saldo objetivo ya existe');
        }
        else {
            $validated = $request->validated();
            $validated['name'] = 'Target test';
            $validated['user_id'] = Auth::user()->id;
            
            TargetBalance::create($validated);

            return redirect()->route('targetbalances.index')->with('success', 'Saldo objetivo creado');
        }
    }

    public function edit (TargetBalance $targetbalance)
    {
        return view('targetbalances.edit', compact('targetbalance'));
    }

    public function update (UpdateTargetBalanceRequest $request, TargetBalance $targetbalance)
    {
        $validate = $request->validated();
        $validate['name'] = 'Target test';

        $targetbalance->update($validate);

        return redirect()->route('targetbalances.index')->with('success', 'Saldo objetivo actualizado');
    }

    public function destroy (TargetBalance $targetbalance)
    {
        $targetbalance->delete();

        return redirect()->route('targetbalances.index')->with('success', 'Saldo objetivo eliminado');
    }
}
