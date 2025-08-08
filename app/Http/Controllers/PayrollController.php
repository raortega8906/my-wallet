<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayrollRequest;
use App\Http\Requests\UpdatePayrollRequest;
use App\Models\Payroll;
use Illuminate\Support\Facades\Auth;

class PayrollController extends Controller
{
    public function index ()
    {
        $payrolls = Payroll::all();

        return view('payrolls.index', compact('payrolls'));
    }

    public function create () 
    {
        return view('payrolls.create');
    }

    public function store (StorePayrollRequest $request)
    {
        $payrolls = Payroll::all()->count();

        if ($payrolls > 0) {
           return redirect()->route('payrolls.index')->with('success', 'Nómina ya existente');
        }
        else {

            $validated = $request->validated();
            $validated['name'] = 'Nómina test';
            $validated['user_id'] = Auth::user()->id;
            
            Payroll::create($validated);

            return redirect()->route('payrolls.index')->with('success', 'Nómina creada');
        }
    }

    public function edit (Payroll $payroll)
    {
        return view('payrolls.edit', compact('payroll'));
    }

    public function update (UpdatePayrollRequest $request, Payroll $payroll)
    {
        $validate = $request->validated();
        $validate['name'] = 'Nómina test';

        $payroll->update($validate);

        return redirect()->route('payrolls.index')->with('success', 'Nómina actualizada');
    }

    public function destroy (Payroll $payroll)
    {
        $payroll->delete();

        return redirect()->route('payrolls.index')->with('success', 'Nómina eliminada');
    }
}
