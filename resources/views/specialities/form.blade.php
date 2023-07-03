<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Especialidad') }}
            {{ Form::text('speciality_code', $specialities->speciality_code, ['class' => 'form-control' . ($errors->has('speciality_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Especialidad']) }}
            {!! $errors->first('speciality_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especialidad') }}
            {{ Form::text('speciality', $specialities->speciality, ['class' => 'form-control' . ($errors->has('speciality') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
            {!! $errors->first('speciality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concept', $specialities->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fechad de Registro') }}
            {{ Form::text('register_date', $specialities->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>