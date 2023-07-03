<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Antecedente') }}
            {{ Form::text('antecedent_code', $antecedent->antecedent_code, ['class' => 'form-control' . ($errors->has('antecedent_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Antecedente']) }}
            {!! $errors->first('antecedent_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antecedente') }}
            {{ Form::text('antecedent', $antecedent->antecedent, ['class' => 'form-control' . ($errors->has('antecedent') ? ' is-invalid' : ''), 'placeholder' => 'Antecedente']) }}
            {!! $errors->first('antecedent', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concept', $antecedent->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $antecedent->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Tratamiento') }}
            {{ Form::text('treatment_type', $antecedent->treatment_type, ['class' => 'form-control' . ($errors->has('treatment_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Tratamiento']) }}
            {!! $errors->first('treatment_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>