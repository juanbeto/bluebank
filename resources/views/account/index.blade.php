@extends('layouts.app')

@section('template_title')
    Account
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Account') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('accounts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        
										<th>Type Account</th>
										<th>Number Account</th>
										<th>Balance</th>
										<th>Client</th>
										<th>City</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accounts as $account)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $account->typeAccount->name }}</td>
											<td>{{ $account->number_account }}</td>
											<td>{{ $account->balance }}</td>
											<td>{{ $account->client->first_name }}  {{ $account->client->last_name }}</td>
											<td>{{ $account->city->name }}</td>

                                            <td>
                                                <form action="{{ route('accounts.destroy',$account->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('accounts.show',$account->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('accounts.edit',$account->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $accounts->links() !!}
            </div>
        </div>
    </div>
@endsection
