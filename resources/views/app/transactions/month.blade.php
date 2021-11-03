@extends('layouts.app')
@section('pagename', __('payview.pagename.transactions.month', ['month' => $month]))

@section('content')
    @forelse($transactions as $transaction)
        <li>{{ $transaction->month }} / {{ $transaction->Category->name }} / {{ $transaction->Category->description }}</li>
    @empty
        niks te zien flikker.
    @endforelse
@endsection
