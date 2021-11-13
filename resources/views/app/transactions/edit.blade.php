@extends('layouts.app')
@section('pagename', __('payview.pagename.transactions.edit'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">

                <div class="app-card">
                    <div class="app-card-body error info">
                        <strong>Additional information for changing a transaction</strong>
                        <p>
                            If your day does not consist of two digits, always put a <kbd>0</kbd> in front of it. For example: <kbd>01</kbd>.
                        </p>
                        <i class="far fa-info-circle fa-fw"></i>
                    </div>
                </div>

                <form action="{{ route('app.transactions.edit', ['id' => $transaction->id]) }}" method="POST" class="app-card">
                    @csrf
                    <div class="app-card-header">
                        Edit your transaction
                        <p class="right">ID: <strong>{{ $transaction->id }}</strong></p>
                    </div>
                    <div class="app-card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="category" name="category" value="{{ $transaction->Category->id }}" placeholder="{{ $transaction->Category->id }}" autocomplete="off" required>
                                    <label for="category">Category ID</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="type" name="type">
                                        <option selected value="{{ $transaction->type }}">{{ $transaction->type }}</option>
                                        <option disabled>&mdash; Other possibilities &mdash;</option>
                                        <option value="revenue">Revenue</option>
                                        <option value="expenses">Expenses</option>
                                        <option value="reservation">Reservation</option>
                                    </select>
                                    <label for="type">Type of transaction</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="amount" name="amount" value="{{ $transaction->amount }}" placeholder="{{ $transaction->amount }}" autocomplete="off" required>
                            <label for="amount">Amount in &euro;</label>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="day" name="day" value="{{ $transaction->day }}" placeholder="{{ $transaction->day }}" autocomplete="off" required>
                                    <label for="day">Day</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="month" name="month">
                                        <option selected value="{{ $transaction->month }}">{{ $transaction->month }}</option>
                                        <option disabled>&mdash; Other possibilities &mdash;</option>
                                        <option value="@lang('payview.transactions.month.jan')">@lang('payview.transactions.month.jan')</option>
                                        <option value="@lang('payview.transactions.month.feb')">@lang('payview.transactions.month.feb')</option>
                                        <option value="@lang('payview.transactions.month.mar')">@lang('payview.transactions.month.mar')</option>
                                        <option value="@lang('payview.transactions.month.apr')">@lang('payview.transactions.month.apr')</option>
                                        <option value="@lang('payview.transactions.month.may')">@lang('payview.transactions.month.may')</option>
                                        <option value="@lang('payview.transactions.month.jun')">@lang('payview.transactions.month.jun')</option>
                                        <option value="@lang('payview.transactions.month.jul')">@lang('payview.transactions.month.jul')</option>
                                        <option value="@lang('payview.transactions.month.aug')">@lang('payview.transactions.month.aug')</option>
                                        <option value="@lang('payview.transactions.month.sep')">@lang('payview.transactions.month.sep')</option>
                                        <option value="@lang('payview.transactions.month.oct')">@lang('payview.transactions.month.oct')</option>
                                        <option value="@lang('payview.transactions.month.nov')">@lang('payview.transactions.month.nov')</option>
                                        <option value="@lang('payview.transactions.month.dec')">@lang('payview.transactions.month.dec')</option>
                                    </select>
                                    <label for="month">Month</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="year" name="year" value="{{ $transaction->year }}" placeholder="{{ $transaction->year }}" autocomplete="off" required>
                                    <label for="year">Year</label>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Edit this transaction</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-12 col-md-4">
                <div class="app-card">
                    <div class="app-card-header">
                        Your Categories
                        <p class="right">Total categories: <b>{{ count($categories) }}</b></p>
                    </div>
                    <div class="app-card-body border-bottom">
                        In the form to change your transaction you will be asked for a category ID, this ID can be found in the information field below.
                    </div>
                    <div class="app-card-body categories">
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <p>
                                                <strong>Category ID</strong>
                                                {{ $category->id }}
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 text-right">
                                            <p>
                                                <strong>Category Name</strong>
                                                {{ $category->name }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
