@extends('layouts.app')

@section('template_title')
    {{ $typeAccount->name ?? "{{ __('Show') Type Account" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Type Account</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('type-accounts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $typeAccount->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
