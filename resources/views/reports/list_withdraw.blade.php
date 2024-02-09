@extends('layouts.app')

@section('template_title')
    Withdraw
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clients for Withdraw') }}
                            </span>
                        
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Amount withdraw</th>
										<th>Number Document</th>
										<th>First Name</th>
										<th>Last Name</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($results as $result)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $result->total_movements }}</td>
											<td>{{ $result->number_document }}</td>
											<td>{{ $result->first_name }}</td>
											<td>{{ $result->last_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection
