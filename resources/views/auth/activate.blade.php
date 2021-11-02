@extends('layouts.auth')
@section('pagename', __('payview.pagename.activate'))
@section('greeting', $user->firstname)

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <a href="{{ route('index') }}" class="payview-logo">{{ config('app.name') }}</a>

        <form class="auth-card" action="{{ route('auth.activate', $user->activation_token) }}" method="POST">
            <div class="auth-card-body text-center extra-padding">
                <h2>@lang('payview.auth.activate.title') {{$user->firstname}}</h2>
                <p>@lang('payview.auth.activate.description')</p>
            </div>

            <div class="auth-card-body">
                @csrf

                <input type="hidden" name="uuid" value="{{$user->activation_token}}">

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">@lang('payview.auth.activate.submit')</button>
                </div>
            </div>
        </form>
    </div>
@endsection
