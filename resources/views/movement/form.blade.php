<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Type Movement') }}
            {{ Form::select('id_type_movement', $movement->type_movement->pluck('name', 'id'), ['class' => 'form-control' . ($errors->has('id_type_movement') ? ' is-invalid' : ''), 'placeholder' => 'Type Movement']) }}
            {!! $errors->first('id_type_movement', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amount') }}
            {{ Form::text('amount', $movement->amount, ['class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'Amount']) }}
            {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::date('date', date('Y-m-d')) }}  
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. Account:') }}
            {{ Form::hidden('id_account', $account->id) }}
            {{  $account->number_account}}
            {!! $errors->first('id_account', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_city') }}
            {{ Form::select('id_city', $movement->city->pluck('name', 'id'), ['class' => 'form-control' . ($errors->has('id_city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('id_city', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>