<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Tipo de Gravedad') }}
            {{ Form::text('severity_type_code', $severityType->severity_type_code, ['class' => 'form-control' . ($errors->has('severity_type_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Tipo de Gravedad']) }}
            {!! $errors->first('severity_type_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Gravedad') }}
            {{ Form::text('severity_type', $severityType->severity_type, ['class' => 'form-control' . ($errors->has('severity_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Gravedad']) }}
            {!! $errors->first('severity_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concept', $severityType->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $severityType->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>