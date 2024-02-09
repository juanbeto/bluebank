    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <div class="float-left">
                            <span class="card-title">{{ __('List') }} Movements</span>
                        </div>
                        <div class="float-right" >
                            <a class="btn btn-primary" href="{{ route('movements.create') }}/{{ $account->id }}"> {{ __('New Movement') }}</a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Type Movement</th>
										<th>Amount</th>
										<th>Date</th>
										<th>City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($account->movements as $movement)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movement->typeMovement->name }}</td>
											<td>{{ $movement->amount }}</td>
											<td>{{ $movement->date }}</td>
											<td>{{ $movement->city->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>