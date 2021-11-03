<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Transactions;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->orderBy('created_at', 'desc')->limit(5)->get()->all();

        $whereData = [
            'user' => auth()->user()->id,
            'month' => strtolower(strftime("%B", time()))
        ];

        $revenueTotal = Transactions::where($whereData)->where('type', 'revenue')->sum('amount');
        $expensesTotal = Transactions::where($whereData)->where('type', 'expenses')->sum('amount');
        $reservationTotal = Transactions::where($whereData)->where('type', 'reservation')->sum('amount');

        return view('app.dashboard')->with([
            'transactions' => $transactions,
            'revenueTotal' => $revenueTotal,
            'expensesTotal' => $expensesTotal,
            'reservationTotal' => $reservationTotal,
        ]);
    }

    public function transactions()
    {
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->get()->all();

        return view('app.transactions.overview')->with([
            'transactions' => $transactions
        ]);
    }

    public function transactionsMonth($month)
    {
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->where('month', $month)->get()->all();

        return view('app.transactions.month')->with([
            'transactions' => $transactions,
            'month' => ucfirst($month)
        ]);
    }

    public function transactionsYear($year)
    {
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->where('year', $year)->get()->all();

        return view('app.transactions.year')->with([
            'transactions' => $transactions,
            'year' => $year
        ]);
    }
}
