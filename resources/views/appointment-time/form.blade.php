<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Horario de citas') }}
            {{ Form::text('appointment_time_code', $appointmentTime->appointment_time_code, ['class' => 'form-control' . ($errors->has('appointment_time_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Horario de citas']) }}
            {!! $errors->first('appointment_time_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dia') }}
            {{ Form::text('day', $appointmentTime->day, ['class' => 'form-control' . ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('day', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cambio') }}
            {{ Form::text('shift', $appointmentTime->shift, ['class' => 'form-control' . ($errors->has('shift') ? ' is-invalid' : ''), 'placeholder' => 'Cambio']) }}
            {!! $errors->first('shift', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tiempo de inicio') }}
            {{ Form::text('star_time', $appointmentTime->star_time, ['class' => 'form-control' . ($errors->has('star_time') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo de Inicio']) }}
            {!! $errors->first('star_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tiempo de Finalizacion') }}
            {{ Form::text('finish_time', $appointmentTime->finish_time, ['class' => 'form-control' . ($errors->has('finish_time') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo de Finalizacion']) }}
            {!! $errors->first('finish_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condicion') }}
            {{ Form::text('condition', $appointmentTime->condition, ['class' => 'form-control' . ($errors->has('condition') ? ' is-invalid' : ''), 'placeholder' => 'Condicion']) }}
            {!! $errors->first('condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doctor') }}
            {{ Form::text('doctor', $appointmentTime->doctor, ['class' => 'form-control' . ($errors->has('doctor') ? ' is-invalid' : ''), 'placeholder' => 'Doctor']) }}
            {!! $errors->first('doctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>