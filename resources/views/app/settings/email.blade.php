@extends('layouts.app')
@section('pagename', __('payview.pagename.settings'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="app-card height-93">
                    <div class="app-card-body info">
                        <p class="info">@lang('payview.settings.title')</p>
                        <p class="fullname">@lang('payview.settings.email.edit')</p>
                        <i class="far fa-paper-plane fa-fw"></i>
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

            <div class="col-12 col-md-4">
                <div class="app-card">

                    <a href="{{ route('app.settings.overview') }}">
                        <div class="app-card-body border-bottom {{ checkActive('app.settings.overview') }}">
                            @lang('payview.settings.overview')
                        </div>
                    </a>
                    <a href="{{ route('app.settings.password') }}">
                        <div class="app-card-body border-bottom {{ checkActive('app.settings.password') }}">
                            @lang('payview.settings.password.title')
                        </div>
                    </a>
                    <a href="{{ route('app.settings.email') }}">
                        <div class="app-card-body {{ checkActive('app.settings.email') }}">
                            @lang('payview.settings.email.title')
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <div class="app-card">
                    <div class="app-card-header">
                        @lang('payview.settings.email.edit')
                    </div>
                    <div class="app-card-body">
                        aa
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
