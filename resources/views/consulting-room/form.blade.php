<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Consultorio') }}
            {{ Form::text('Codigo de Consultorio', $consultingRoom->consulting_room_code, ['class' => 'form-control' . ($errors->has('consulting_room_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Consultorio']) }}
            {!! $errors->first('consulting_room_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de Consultorio') }}
            {{ Form::text('consulting_room_number', $consultingRoom->consulting_room_number, ['class' => 'form-control' . ($errors->has('consulting_room_number') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Consultorio']) }}
            {!! $errors->first('consulting_room_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concept', $consultingRoom->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condicion') }}
            {{ Form::text('condition', $consultingRoom->condition, ['class' => 'form-control' . ($errors->has('condition') ? ' is-invalid' : ''), 'placeholder' => 'Condicion']) }}
            {!! $errors->first('condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $consultingRoom->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>