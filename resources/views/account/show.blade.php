@extends('layouts.app')

@section('template_title')
    {{ $account->name ?? "{{ __('Show') Account" }}
@endsection

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

@if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
@endif

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="float-left">
                                <span class="card-title">{{ __('Show') }} Account</span>
                            </div>
                            <div class="float-right" style="display: flex; justify-content: space-between;">
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('accounts.index') }}"> {{ __('Back') }}</a>
                                </div>
                                <div class="mt-2 col-md-1">
                                 </div>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('accounts.index') }}"> {{ __('Extract') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Type Account:</strong>
                            {{ $account->TypeAccount->name }}
                        </div>
                        <div class="form-group">
                            <strong>Number Account:</strong>
                            {{ $account->number_account }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $account->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Client:</strong>
                            {{ $account->Client->first_name }} {{ $account->Client->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $account->City->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-2 col-md-12">
    </div>
    @include('account.movements')
@endsection
