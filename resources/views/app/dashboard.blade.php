@extends('layouts.app')
@section('pagename', __('payview.pagename.dashboard'))

@section('content')
<<<<<<< Updated upstream
    @if (session()->has('success'))
        <div class="auth-card-body error success">
            <strong>@lang('payview.auth.login.success')</strong>
            {{ session('success') }}
        </div>
    @endif
<<<<<<< Updated upstream

    <div class="container">
=======
=======
    <div class="container">

        <a href="{{ route('app.transactions.create') }}" class="btn btn-dark float-right">Create a transaction</a>
        <div class="clearfix"></div>

>>>>>>> Stashed changes
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
<<<<<<< Updated upstream
                        <p class="info">Welcome back,</p>
=======
                        <p class="info">@lang('payview.dashboard.welcome')</p>
>>>>>>> Stashed changes
                        <p class="fullname">{{ $user->firstname }} {{ $user->lastname }}</p>
                        <i class="far fa-user fa-fw"></i>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
<<<<<<< Updated upstream
                        <p class="info">Lets talk about today,</p>
=======
                        <p class="info">@lang('payview.dashboard.today')</p>
>>>>>>> Stashed changes
                        <p class="fullname">{{ strftime("%A %d %B %G", time()) }}</p>
                        <i class="far fa-calendar-alt fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="app-card">
                    <div class="app-card-body stats">
                        <div class="icon green">
                            <i class="far fa-plus fa-fw"></i>
                        </div>
<<<<<<< Updated upstream
                        <p class="title">Revenue</p>
=======
                        <p class="title">@lang('payview.dashboard.statics.revenue')</p>
>>>>>>> Stashed changes
                        <p class="month">{{ strftime("%b %G", time()) }}</p>
                        <p class="amount">&euro; {{ $revenueTotal }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="app-card">
                    <div class="app-card-body stats">
                        <div class="icon red">
                            <i class="far fa-minus fa-fw"></i>
                        </div>
<<<<<<< Updated upstream
                        <p class="title">Expenses</p>
=======
                        <p class="title">@lang('payview.dashboard.statics.expenses')</p>
>>>>>>> Stashed changes
                        <p class="month">{{ strftime("%b %G", time()) }}</p>
                        <p class="amount">&euro; {{ $expensesTotal }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="app-card">
                    <div class="app-card-body stats">
                        <div class="icon yellow">
                            <i class="far fa-piggy-bank fa-fw"></i>
                        </div>
<<<<<<< Updated upstream
                        <p class="title">Reservations</p>
=======
                        <p class="title">@lang('payview.dashboard.statics.reservations')</p>
>>>>>>> Stashed changes
                        <p class="month">{{ strftime("%b %G", time()) }}</p>
                        <p class="amount">&euro; {{ $reservationTotal }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="app-card">
                    <div class="app-card-body stats">
                        <div class="icon grey">
                            <i class="far fa-balance-scale fa-fw"></i>
                        </div>
<<<<<<< Updated upstream
                        <p class="title">Balance</p>
=======
                        <p class="title">@lang('payview.dashboard.statics.balance')</p>
>>>>>>> Stashed changes
                        <p class="month">{{ strftime("%b %G", time()) }}</p>
                        <p class="amount {{ $payView::getSaldoColor($revenueTotal - ($expensesTotal + $reservationTotal)) }}">&euro; {{ $revenueTotal - ($expensesTotal + $reservationTotal) }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="app-card">
                    <div class="app-card-header">
<<<<<<< Updated upstream
                        idk
                    </div>

                    <div class="app-card-body">
                        Body
=======
                        @lang('payview.dashboard.subscriptions.title')
                        <a href="{{ route('app.transactions.overview') }}" class="btn btn-sm btn-dark">@lang('payview.dashboard.subscriptions.button.view')</a>
                        <a href="{{ route('app.transactions.overview') }}" class="btn btn-sm btn-success">@lang('payview.dashboard.subscriptions.button.add')</a>
                    </div>

                    <div class="app-card-body transactions">
                        @forelse($subscriptions as $subscription)
                            <div class="transaction-item">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="type">
                                            {{ $subscription->type }}
                                        </p>
                                        <p class="amount">@lang('payview.dashboard.subscriptions.euro') {{ $subscription->amount }}</p>
                                    </div>

                                    <div class="col-6 text-right">
                                        <p class="category">{{ $subscription->name }}</p>
                                        <p class="date">{{ $subscription->payment_period }} | {{ $subscription->contract_term }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="nothing">
                                @lang('payview.dashboard.subscriptions.nothing')
                            </div>
                        @endforelse
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="app-card">
                    <div class="app-card-header">
<<<<<<< Updated upstream
                        Recent transactions
                        <a href="{{ route('app.transactions.overview') }}" class="btn btn-sm btn-dark">View all</a>
=======
                        @lang('payview.dashboard.transactions.title')
                        <a href="{{ route('app.transactions.overview') }}" class="btn btn-sm btn-dark">@lang('payview.dashboard.transactions.button.view')</a>
                        <a href="{{ route('app.transactions.overview') }}" class="btn btn-sm btn-success">@lang('payview.dashboard.transactions.button.add')</a>
>>>>>>> Stashed changes
                    </div>

                    <div class="app-card-body transactions">
                        @forelse($transactions as $transaction)
                            <div class="transaction-item">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon {{ $payView::getTransactionColor($transaction->type) }}">
                                            <i class="far fa-{{ $transaction->Category->icon }} fa-fw"></i>
                                        </div>
                                        <p class="type"> {{ $transaction->type }}</p>
<<<<<<< Updated upstream
                                        <p class="amount">&euro; {{ $transaction->amount }}</p>
=======
                                        <p class="amount">@lang('payview.dashboard.transactions.euro') {{ $transaction->amount }}</p>
>>>>>>> Stashed changes
                                    </div>

                                    <div class="col-6 text-right">
                                        <p class="category">{{ $transaction->Category->name }}</p>
                                        <p class="date">{{ $transaction->day }} {{ $transaction->month }} {{ $transaction->year }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
<<<<<<< Updated upstream
                            niks te zien flikker.
=======
                            <div class="nothing">
                                @lang('payview.dashboard.transactions.nothing')
                            </div>
>>>>>>> Stashed changes
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

<<<<<<< Updated upstream
=======
>>>>>>> Stashed changes
>>>>>>> Stashed changes
@endsection

