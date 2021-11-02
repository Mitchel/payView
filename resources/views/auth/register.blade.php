@extends('layouts.auth')
@section('pagename', __('payview.pagename.register'))

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <a href="{{ route('index') }}" class="payview-logo">{{ config('app.name') }}</a>

        <form class="auth-card" action="{{ route('auth.register') }}" method="POST">
            <div class="auth-card-body text-center extra-padding">
                <h2>@lang('payview.auth.register.title')</h2>
                <p>@lang('payview.auth.register.description')</p>
            </div>

            @if ($errors->any())
                <div class="auth-card-body error">
                    <strong>@lang('payview.auth.register.error')</strong>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </div>
            @endif

            <div class="auth-card-body">
                @csrf

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname') }}" placeholder="@lang('payview.auth.register.firstname')" autocomplete="off" required>
                            <label for="firstname">@lang('payview.auth.register.firstname') </label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="@lang('payview.auth.register.lastname')" autocomplete="off" required>
                            <label for="lastname">@lang('payview.auth.register.lastname') </label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="@lang('payview.auth.register.email')" autocomplete="off" required>
                    <label for="email">@lang('payview.auth.register.email') </label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="@lang('payview.auth.register.password')" autocomplete="off" required>
                    <label for="password">@lang('payview.auth.register.password')</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">@lang('payview.auth.register.submit')</button>
                </div>
            </div>
        </form>

        <p class="no-account">
            @lang('payview.auth.register.account') <a href="{{ route('auth.login') }}">@lang('payview.auth.register.signin')</a>
        </p>
    </div>
@endsection
