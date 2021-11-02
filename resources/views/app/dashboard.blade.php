@extends('layouts.auth')
@section('pagename', __('payview.pagename.dashboard'))

@section('content')
    @if (session()->has('success'))
        <div class="auth-card-body error success">
            <strong>@lang('payview.auth.login.success')</strong>
            {{ session('success') }}
        </div>
    @endif
@endsection

