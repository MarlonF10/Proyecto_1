<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Enfermedad') }}
            {{ Form::text('disease_code', $disease->disease_code, ['class' => 'form-control' . ($errors->has('disease_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Enfermedad']) }}
            {!! $errors->first('disease_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Enfermedad') }}
            {{ Form::text('disease', $disease->disease, ['class' => 'form-control' . ($errors->has('disease') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedad']) }}
            {!! $errors->first('disease', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concept', $disease->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Simtomas') }}
            {{ Form::text('symptoms', $disease->symptoms, ['class' => 'form-control' . ($errors->has('symptoms') ? ' is-invalid' : ''), 'placeholder' => 'Simtomas']) }}
            {!! $errors->first('symptoms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $disease->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Tratamiento') }}
            {{ Form::text('treatment_type', $disease->treatment_type, ['class' => 'form-control' . ($errors->has('treatment_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Tratamiento']) }}
            {!! $errors->first('treatment_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>