<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index ()
    {
        $expenses = Expense::all();

        return view('expenses.index', compact('expenses'));
    }

    public function create ()
    {
        return view('expenses.create');
    }

    public function store (StoreExpenseRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::user()->id;

        Expense::create($validated);

        return redirect()->route('expenses.index');
    }
}
