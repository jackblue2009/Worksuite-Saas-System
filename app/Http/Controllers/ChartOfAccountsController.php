<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ChartOfAccount;
use Illuminate\Http\Request;

class ChartOfAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chartOfAccounts = ChartOfAccount::all();
        return view('chart-of-accounts.index', compact('chartOfAccounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accountTypes = [
            'Asset' => [
                'other_asset' => __('app.otherAsset'),
                'other_current_asset' => __('app.otherCurrentAsset'),
                'cash' => __('app.cash'),
                'bank' => __('app.bank'),
                'fixed_asset' => __('app.fixedAsset'),
                'stock' => __('app.stock'),
            ],
            'Liability' => [
                'other_liability' => __('app.otherLiability'),
                'other_current_liability' => __('app.otherCurrentLiability'),
                'long_term_liability' => __('app.longTermLiability'),
                'credit_cards' => __('app.creditCards'),
            ],
            'Income' => [
                'income' => __('app.income'),
                'other_income' => __('app.otherIncome'),
            ],
            'Expense' => [
                'expense' => __('app.expense'),
                'other_expense' => __('app.otherExpense'),
                'cost_of_goods_sold' => __('app.costOfGoodsSold'),
            ],
        ];

        return view('chart-of-accounts.create', compact('accountTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'account_name' =>'required',
            'account_number' =>'required',
            'account_type' =>'required',
            'account_sub_type' =>'required',
        ]);

        $chartModel = new ChartOfAccount();
        $chartModel->account_name = $validateData['account_name'];
        $chartModel->account_number = $validateData['account_number'];
        $chartModel->account_type = $validateData['account_type'];
        $chartModel->account_sub_type = $validateData['account_sub_type'];
        $chartModel->save();
        return redirect()->route('chart-of-accounts.index')->with('success', __('app.accountCreated'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $chartAcc = ChartOfAccount::find($id);
        return view('chart-of-accounts.show', compact('chartAcc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chartOfAccount = ChartOfAccount::findOrFail($id);
        $accountTypes = [
            'assets' => [
                'other_asset' => __('app.otherAsset'),
                'other_current_asset' => __('app.otherCurrentAsset'),
                'cash' => __('app.cash'),
                'bank' => __('app.bank'),
                'fixed_assets' => __('app.fixedAssets'),
                'stock' => __('app.stock'),
            ],
            'liabilities' => [
                'other_current_liability' => __('app.otherCurrentLiability'),
                'other_liability' => __('app.otherLiability'),
                'long_term_liability' => __('app.longTermLiability'),
                'credit_cards' => __('app.creditCards'),
            ],
            'equity' => [
                'owners_equity' => __('app.ownersEquity'),
                'retained_earnings' => __('app.retainedEarnings'),
                'opening_balance_offset' => __('app.openingBalanceOffset'),
                'drawings' => __('app.drawings'),
            ],
            'income' => [
                'income' => __('app.income'),
                'other_income' => __('app.otherIncome'),
            ],
            'expense' => [
                'expense' => __('app.expense'),
                'other_expense' => __('app.otherExpense'),
                'cost_of_goods_sold' => __('app.costOfGoodsSold'),
            ],
        ];

        return view('chart-of-accounts.edit', compact('chartOfAccount', 'accountTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'account_name' => 'required',
            'account_number' => 'required',
            'account_type' => 'required',
            'account_sub_type' => 'required',
            // Add other validation rules as needed
        ]);

        $chartOfAccount = ChartOfAccount::findOrFail($id);
        $chartOfAccount->account_name = $validatedData['account_name'];
        $chartOfAccount->account_number = $validatedData['account_number'];
        $chartOfAccount->account_type = $validatedData['account_type'];
        $chartOfAccount->account_sub_type = $validatedData['account_sub_type'];
        // Update other properties as needed
        $chartOfAccount->save();

        return redirect()->route('chart-of-accounts.index')->with('success', __('app.accountUpdated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chartOfAccount = ChartOfAccount::findOrFail($id);
        $chartOfAccount->delete();

        return redirect()->route('chart-of-accounts.index')->with('success', __('app.accountDeleted'));
    }
}
