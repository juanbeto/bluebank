@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? "{{ __('Show') Client" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Type Document:1</strong>
                            {{ $client->typeDocument->name }}
                        </div>
                        <div class="form-group">
                            <strong>Number Document:</strong>
                            {{ $client->number_document }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $client->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $client->last_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
