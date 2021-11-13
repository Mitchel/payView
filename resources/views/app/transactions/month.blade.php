@extends('layouts.app')
@section('pagename', __('payview.pagename.transactions.month', ['month' => $month]))

@section('content')
<<<<<<< Updated upstream
    @forelse($transactions as $transaction)
        <li>{{ $transaction->month }} / {{ $transaction->Category->name }} / {{ $transaction->Category->description }}</li>
    @empty
        niks te zien flikker.
    @endforelse
=======
    <div class="container">
        <a href="{{ route('app.transactions.overview') }}" class="btn btn-dark float-right">Back to transaction overview</a>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
                        <p class="info">@lang('payview.transactions.title-specific')</p>
                        <p class="fullname">{{ $month }}</p>
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

        <div class="app-card">
            <div class="app-card-header">
                Transactions overview <small>(Total: <b>{{ count($transactions) }}</b>)</small>
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
>>>>>>> Stashed changes
@endsection
