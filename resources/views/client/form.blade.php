<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Type Document') }}
            {{ Form::select('id_type_document', $client->typeDocument->pluck('name', 'id'), ['class' => 'form-control' . ($errors->has('id_type_document') ? ' is-invalid' : ''), 'placeholder' => 'Type Document']) }}
            {!! $errors->first('id_type_document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_document') }}
            {{ Form::text('number_document', $client->number_document, ['class' => 'form-control' . ($errors->has('number_document') ? ' is-invalid' : ''), 'placeholder' => 'Number Document']) }}
            {!! $errors->first('number_document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $client->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $client->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>