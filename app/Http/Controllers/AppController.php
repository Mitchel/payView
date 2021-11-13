<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Models\Categories;
use App\Models\Transactions;
=======
<<<<<<< Updated upstream
=======
use App\Models\Categories;
use App\Models\Subscriptions;
use App\Models\Transactions;
>>>>>>> Stashed changes
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
<<<<<<< Updated upstream
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->orderBy('created_at', 'desc')->limit(5)->get()->all();

=======
<<<<<<< Updated upstream
        return view('app.dashboard');
=======
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->orderBy('created_at', 'desc')->limit(5)->get()->all();

        $subscriptions = Subscriptions::with('subscription')->where('user', auth()->user()->id)->get()->all();

>>>>>>> Stashed changes
        $whereData = [
            'user' => auth()->user()->id,
            'month' => strtolower(strftime("%B", time()))
        ];

        $revenueTotal = Transactions::where($whereData)->where('type', 'revenue')->sum('amount');
        $expensesTotal = Transactions::where($whereData)->where('type', 'expenses')->sum('amount');
        $reservationTotal = Transactions::where($whereData)->where('type', 'reservation')->sum('amount');

        return view('app.dashboard')->with([
            'transactions' => $transactions,
<<<<<<< Updated upstream
=======
            'subscriptions' => $subscriptions,
>>>>>>> Stashed changes
            'revenueTotal' => $revenueTotal,
            'expensesTotal' => $expensesTotal,
            'reservationTotal' => $reservationTotal,
        ]);
    }

    public function transactions()
    {
<<<<<<< Updated upstream
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->get()->all();

        return view('app.transactions.overview')->with([
            'transactions' => $transactions
=======
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->orderBy('created_at', 'desc')->lazy()->collect();

        return view('app.transactions.overview')->with([
            'transactions' => $transactions,
>>>>>>> Stashed changes
        ]);
    }

    public function transactionsMonth($month)
    {
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->where('month', $month)->get()->all();

        return view('app.transactions.month')->with([
            'transactions' => $transactions,
            'month' => ucfirst($month)
        ]);
<<<<<<< Updated upstream
=======
>>>>>>> Stashed changes
>>>>>>> Stashed changes
    }

    public function transactionsYear($year)
    {
        $transactions = Transactions::with('category')->where('user', auth()->user()->id)->where('year', $year)->get()->all();

        return view('app.transactions.year')->with([
            'transactions' => $transactions,
            'year' => $year
        ]);
    }

    public function transactionEdit(Request $request, $id)
    {
        $transaction = Transactions::where('user', auth()->user()->id)->where('id', $id)->firstOrFail();
        $categories = Categories::where('user', auth()->user()->id)->get()->all();

        if($request->isMethod('post')) {
            $this->validate($request, [
                'category'          => ['required'],
                'type'              => ['required'],
                'amount'            => ['required'],
                'day'               => ['required'],
                'month'             => ['required'],
                'year'              => ['required'],
            ]);

            Transactions::where('user', auth()->user()->id)->where('id', $id)->update($request->except(['_token']));

            return redirect()->route('app.transactions.overview')->with('success', __('payview.transactions.success'));
        }

        return view('app.transactions.edit')->with([
            'transaction' => $transaction,
            'categories' => $categories,
        ]);
    }

    public function transactionCreate(Request $request)
    {
        $categories = Categories::where('user', auth()->user()->id)->get()->all();

        if($request->isMethod('post')) {
            $this->validate($request, [
                'user'              => ['required'],
                'category'          => ['required'],
                'type'              => ['required'],
                'amount'            => ['required'],
                'day'               => ['required'],
                'month'             => ['required'],
                'year'              => ['required'],
            ]);

            Transactions::create($request->except(['_token']));

            return redirect()->route('app.transactions.overview')->with('success', __('payview.transactions.success'));
        }

        return view('app.transactions.add')->with([
            'categories' => $categories,
        ]);
    }

    public function transactionDelete(Request $request, $id)
    {
        Transactions::where('user', auth()->user()->id)->where('id', $id)->delete($request->all());
        return redirect()->route('app.transactions.overview')->with('success', __('payview.transactions.delete'));
    }
}
