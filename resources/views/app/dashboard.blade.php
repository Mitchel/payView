@extends('layouts.app')
@section('pagename', __('payview.pagename.dashboard'))

@section('content')
    @if (session()->has('success'))
        <div class="auth-card-body error success">
            <strong>@lang('payview.auth.login.success')</strong>
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
                        <p class="info">Welcome back,</p>
                        <p class="fullname">{{ $user->firstname }} {{ $user->lastname }}</p>
                        <i class="far fa-user fa-fw"></i>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
                        <p class="info">Lets talk about today,</p>
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
                        <p class="title">Revenue</p>
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
                        <p class="title">Expenses</p>
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
                        <p class="title">Reservations</p>
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
                        <p class="title">Balance</p>
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
                        idk
                    </div>

                    <div class="app-card-body">
                        Body
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="app-card">
                    <div class="app-card-header">
                        Recent transactions
                        <a href="{{ route('app.transactions.overview') }}" class="btn btn-sm btn-dark">View all</a>
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
                                        <p class="amount">&euro; {{ $transaction->amount }}</p>
                                    </div>

                                    <div class="col-6 text-right">
                                        <p class="category">{{ $transaction->Category->name }}</p>
                                        <p class="date">{{ $transaction->day }} {{ $transaction->month }} {{ $transaction->year }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            niks te zien flikker.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

