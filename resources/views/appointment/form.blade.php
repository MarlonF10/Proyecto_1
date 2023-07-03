<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo de Citas') }}
            {{ Form::text('appointment_code', $appointment->appointment_code, ['class' => 'form-control' . ($errors->has('appointment_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Cita']) }}
            {!! $errors->first('appointment_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Citas') }}
            {{ Form::text('appointment_date', $appointment->appointment_date, ['class' => 'form-control' . ($errors->has('appointment_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Cita']) }}
            {!! $errors->first('appointment_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Proxima Cita') }}
            {{ Form::text('next_appointment_date', $appointment->next_appointment_date, ['class' => 'form-control' . ($errors->has('next_appointment_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Proxima Cita']) }}
            {!! $errors->first('next_appointment_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condicion') }}
            {{ Form::text('condition', $appointment->condition, ['class' => 'form-control' . ($errors->has('condition') ? ' is-invalid' : ''), 'placeholder' => 'Condicion']) }}
            {!! $errors->first('condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $appointment->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paciente') }}
            {{ Form::text('patient', $appointment->patient, ['class' => 'form-control' . ($errors->has('patient') ? ' is-invalid' : ''), 'placeholder' => 'Paciente']) }}
            {!! $errors->first('patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doctor') }}
            {{ Form::text('doctor', $appointment->doctor, ['class' => 'form-control' . ($errors->has('doctor') ? ' is-invalid' : ''), 'placeholder' => 'Doctor']) }}
            {!! $errors->first('doctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario de Cita') }}
            {{ Form::text('appointment_time', $appointment->appointment_time, ['class' => 'form-control' . ($errors->has('appointment_time') ? ' is-invalid' : ''), 'placeholder' => 'Horario de Cita']) }}
            {!! $errors->first('appointment_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>