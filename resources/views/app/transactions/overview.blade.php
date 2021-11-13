@extends('layouts.app')
@section('pagename', __('payview.pagename.transactions.overview'))

@section('content')
<<<<<<< Updated upstream
    @forelse($transactions as $transaction)
        <li>{{ $transaction->month }} / {{ $transaction->Category->name }} / {{ $transaction->Category->description }}</li>
    @empty
        niks te zien flikker.
    @endforelse
=======

    <div class="container">

        <a href="{{ route('app.transactions.create') }}" class="btn btn-dark float-right">Create a transaction</a>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
                        <p class="info">@lang('payview.transactions.title')</p>
                        <p class="fullname">@lang('payview.transactions.overview')</p>
                        <i class="far fa-receipt fa-fw"></i>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
                        <p class="info">@lang('payview.dashboard.today')</p>
                        <p class="fullname">{{ strftime("%A %d %B %G", time()) }}</p>
                        <i class="far fa-calendar-alt fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="app-card">
                    <div class="app-card-header">
                        Transactions overview
                        <p class="right">Total: <b>{{ count($transactions) }}</b></p>
                    </div>
                    <div class="app-card-body transactions overview">
                        @forelse($transactions as $transaction)
                            <div class="transaction-item">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon {{ $payView::getTransactionColor($transaction->type) }}">
                                            <i class="far fa-{{ $transaction->Category->icon }} fa-fw"></i>
                                        </div>

                                        <p class="type"> {{ $transaction->type }}</p>
                                        <p class="amount">@lang('payview.dashboard.transactions.euro') {{ $transaction->amount }}</p>
                                    </div>

                                    <div class="col-6 text-right">
                                        <div class="info-right">
                                            <p class="category">{{ $transaction->Category->name }}</p>
                                            <p class="date">{{ $transaction->day }} {{ $transaction->month }} {{ $transaction->year }}</p>
                                        </div>

                                        <a href="{{ route('app.transactions.delete', $transaction->id) }}" class="btn-action"><i class="far fa-trash-alt fa-fw"></i></a>
                                        <a href="{{ route('app.transactions.edit', $transaction->id) }}" class="btn-action"><i class="far fa-edit fa-fw"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="nothing">
                                @lang('payview.dashboard.transactions.nothing')
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="app-card">
                    <div class="app-card-header">
                        See a specific month
                    </div>
                    <div class="app-card-body border-bottom">
                        Want to see transactions from a specific month specifically? Then click on the button below for the month you want to view.
                    </div>
                    <div class="app-card-body monthly">
                        <div class="row">
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.jan')]) }}" class="btn btn-dark">@lang('payview.transactions.month.jan')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.feb')]) }}" class="btn btn-dark">@lang('payview.transactions.month.feb')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.mar')]) }}" class="btn btn-dark">@lang('payview.transactions.month.mar')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.apr')]) }}" class="btn btn-dark">@lang('payview.transactions.month.apr')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.may')]) }}" class="btn btn-dark">@lang('payview.transactions.month.may')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.jun')]) }}" class="btn btn-dark">@lang('payview.transactions.month.jun')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.jul')]) }}" class="btn btn-dark">@lang('payview.transactions.month.jul')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.aug')]) }}" class="btn btn-dark">@lang('payview.transactions.month.aug')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.sep')]) }}" class="btn btn-dark">@lang('payview.transactions.month.sep')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.oct')]) }}" class="btn btn-dark">@lang('payview.transactions.month.oct')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.nov')]) }}" class="btn btn-dark no-margin">@lang('payview.transactions.month.nov')</a></div></div>
                            <div class="col-6"><div class="d-grid gap-2"><a href="{{ route('app.transactions.month', ['month' => __('payview.transactions.month.dec')]) }}" class="btn btn-dark no-margin">@lang('payview.transactions.month.dec')</a></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> Stashed changes
@endsection
