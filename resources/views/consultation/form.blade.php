<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Consultacion') }}
            {{ Form::text('consultation_code', $consultation->consultation_code, ['class' => 'form-control' . ($errors->has('consultation_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Consultacion']) }}
            {!! $errors->first('consultation_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Presion Arterial') }}
            {{ Form::text('blood_pressure', $consultation->blood_pressure, ['class' => 'form-control' . ($errors->has('blood_pressure') ? ' is-invalid' : ''), 'placeholder' => 'Presion Arterial']) }}
            {!! $errors->first('blood_pressure', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temperatura') }}
            {{ Form::text('temperature', $consultation->temperature, ['class' => 'form-control' . ($errors->has('temperature') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura']) }}
            {!! $errors->first('temperature', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Frecuencia Respiratoria') }}
            {{ Form::text('breathing_frequency', $consultation->breathing_frequency, ['class' => 'form-control' . ($errors->has('breathing_frequency') ? ' is-invalid' : ''), 'placeholder' => 'Frecuencia Respiratoria']) }}
            {!! $errors->first('breathing_frequency', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ritmo cardiaco') }}
            {{ Form::text('heart_rate', $consultation->heart_rate, ['class' => 'form-control' . ($errors->has('heart_rate') ? ' is-invalid' : ''), 'placeholder' => 'Ritmo Cardiaco']) }}
            {!! $errors->first('heart_rate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('saturacion') }}
            {{ Form::text('saturation', $consultation->saturation, ['class' => 'form-control' . ($errors->has('saturation') ? ' is-invalid' : ''), 'placeholder' => 'Saturacion']) }}
            {!! $errors->first('saturation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso corporal') }}
            {{ Form::text('body_weight', $consultation->body_weight, ['class' => 'form-control' . ($errors->has('body_weight') ? ' is-invalid' : ''), 'placeholder' => 'Peso Corporal']) }}
            {!! $errors->first('body_weight', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Altura de Cuerpo') }}
            {{ Form::text('body_height', $consultation->body_height, ['class' => 'form-control' . ($errors->has('body_height') ? ' is-invalid' : ''), 'placeholder' => 'Altura de Cuerpo']) }}
            {!! $errors->first('body_height', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tiempo de simtomas') }}
            {{ Form::text('time_symptoms', $consultation->time_symptoms, ['class' => 'form-control' . ($errors->has('time_symptoms') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo de simtomas']) }}
            {!! $errors->first('time_symptoms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Examen Fisico') }}
            {{ Form::text('physical_exam', $consultation->physical_exam, ['class' => 'form-control' . ($errors->has('physical_exam') ? ' is-invalid' : ''), 'placeholder' => 'Examen Fisico']) }}
            {!! $errors->first('physical_exam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paciente') }}
            {{ Form::text('patient', $consultation->patient, ['class' => 'form-control' . ($errors->has('patient') ? ' is-invalid' : ''), 'placeholder' => 'Paciente']) }}
            {!! $errors->first('patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antecedente') }}
            {{ Form::text('antecedent', $consultation->antecedent, ['class' => 'form-control' . ($errors->has('antecedent') ? ' is-invalid' : ''), 'placeholder' => 'Antecedente']) }}
            {!! $errors->first('antecedent', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('examen') }}
            {{ Form::text('exam', $consultation->exam, ['class' => 'form-control' . ($errors->has('exam') ? ' is-invalid' : ''), 'placeholder' => 'Examen']) }}
            {!! $errors->first('exam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Enfermedad') }}
            {{ Form::text('disease', $consultation->disease, ['class' => 'form-control' . ($errors->has('disease') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedad']) }}
            {!! $errors->first('disease', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('severity_type') }}
            {{ Form::text('severity_type', $consultation->severity_type, ['class' => 'form-control' . ($errors->has('severity_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Gravedad']) }}
            {!! $errors->first('severity_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Tratamiento') }}
            {{ Form::text('tratment_type', $consultation->tratment_type, ['class' => 'form-control' . ($errors->has('tratment_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Tratamiento']) }}
            {!! $errors->first('tratment_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doctor') }}
            {{ Form::text('doctor', $consultation->doctor, ['class' => 'form-control' . ($errors->has('doctor') ? ' is-invalid' : ''), 'placeholder' => 'Doctor']) }}
            {!! $errors->first('doctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>