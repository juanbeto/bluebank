@extends('layouts.app')

@section('template_title')
    {{ $movement->name ?? "{{ __('Show') Movement" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Movement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movements.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Type Movement:</strong>
                            {{ $movement->id_type_movement }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $movement->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $movement->date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Account:</strong>
                            {{ $movement->id_account }}
                        </div>
                        <div class="form-group">
                            <strong>Id City:</strong>
                            {{ $movement->id_city }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
