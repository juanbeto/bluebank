<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_type_account') }}
            {{ Form::text('id_type_account', $account->id_type_account, ['class' => 'form-control' . ($errors->has('id_type_account') ? ' is-invalid' : ''), 'placeholder' => 'Id Type Account']) }}
            {!! $errors->first('id_type_account', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_account') }}
            {{ Form::text('number_account', $account->number_account, ['class' => 'form-control' . ($errors->has('number_account') ? ' is-invalid' : ''), 'placeholder' => 'Number Account']) }}
            {!! $errors->first('number_account', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('balance') }}
            {{ Form::text('balance', $account->balance, ['class' => 'form-control' . ($errors->has('balance') ? ' is-invalid' : ''), 'placeholder' => 'Balance']) }}
            {!! $errors->first('balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_client') }}
            {{ Form::text('id_client', $account->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => 'Id Client']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_city') }}
            {{ Form::text('id_city', $account->id_city, ['class' => 'form-control' . ($errors->has('id_city') ? ' is-invalid' : ''), 'placeholder' => 'Id City']) }}
            {!! $errors->first('id_city', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>