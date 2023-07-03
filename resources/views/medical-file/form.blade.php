<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Expediente') }}
            {{ Form::text('medical_file_code', $medicalFile->medical_file_code, ['class' => 'form-control' . ($errors->has('medical_file_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Expediente']) }}
            {!! $errors->first('medical_file_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $medicalFile->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consultacion') }}
            {{ Form::text('consultation', $medicalFile->consultation, ['class' => 'form-control' . ($errors->has('consultation') ? ' is-invalid' : ''), 'placeholder' => 'Consultacion']) }}
            {!! $errors->first('consultation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prescripcion') }}
            {{ Form::text('prescription', $medicalFile->prescription, ['class' => 'form-control' . ($errors->has('prescription') ? ' is-invalid' : ''), 'placeholder' => 'Prescripcion']) }}
            {!! $errors->first('prescription', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>