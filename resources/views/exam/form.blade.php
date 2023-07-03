<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Examen') }}
            {{ Form::text('exam_code', $exam->exam_code, ['class' => 'form-control' . ($errors->has('exam_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Examen']) }}
            {!! $errors->first('exam_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resultados') }}
            {{ Form::text('results', $exam->results, ['class' => 'form-control' . ($errors->has('results') ? ' is-invalid' : ''), 'placeholder' => 'Resultados']) }}
            {!! $errors->first('results', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doctor') }}
            {{ Form::text('doctor', $exam->doctor, ['class' => 'form-control' . ($errors->has('doctor') ? ' is-invalid' : ''), 'placeholder' => 'Doctor']) }}
            {!! $errors->first('doctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paciente') }}
            {{ Form::text('patient', $exam->patient, ['class' => 'form-control' . ($errors->has('patient') ? ' is-invalid' : ''), 'placeholder' => 'Paciente']) }}
            {!! $errors->first('patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Examen') }}
            {{ Form::text('exam_type', $exam->exam_type, ['class' => 'form-control' . ($errors->has('exam_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Examen']) }}
            {!! $errors->first('exam_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Gravedad') }}
            {{ Form::text('severity_type', $exam->severity_type, ['class' => 'form-control' . ($errors->has('severity_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Gravedad']) }}
            {!! $errors->first('severity_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>