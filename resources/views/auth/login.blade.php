@extends('layouts.auth')
@section('pagename', __('payview.pagename.login'))

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <a href="{{ route('index') }}" class="payview-logo">{{ config('app.name') }}</a>

        <form class="auth-card" action="{{ route('auth.login') }}" method="POST">
            <div class="auth-card-body text-center extra-padding">
                <h2>@lang('payview.auth.login.title')</h2>
                <p>@lang('payview.auth.login.description')</p>
            </div>

            @if ($errors->any())
                <div class="auth-card-body error">
                    @foreach ($errors->all() as $error)
                        <strong>@lang('payview.auth.login.error')</strong>
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <div class="auth-card-body">
                @csrf

                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="@lang('payview.auth.login.email')" required>
                    <label for="email">@lang('payview.auth.login.email') </label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="@lang('payview.auth.login.password')" required>
                    <label for="password">@lang('payview.auth.login.password')</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">@lang('payview.auth.login.submit')</button>
                </div>
            </div>
        </form>

        <p class="no-account">
            @lang('payview.auth.login.account') <a href="{{ route('auth.register') }}">@lang('payview.auth.login.signup')</a>
        </p>
    </div>
@endsection
