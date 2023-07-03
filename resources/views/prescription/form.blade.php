<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Prescripcion') }}
            {{ Form::text('prescription_code', $prescription->prescription_code, ['class' => 'form-control' . ($errors->has('prescription_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Prescripcion']) }}
            {!! $errors->first('prescription_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Medicina') }}
            {{ Form::text('medicine', $prescription->medicine, ['class' => 'form-control' . ($errors->has('medicine') ? ' is-invalid' : ''), 'placeholder' => 'Medicina']) }}
            {!! $errors->first('medicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dosis') }}
            {{ Form::text('dose', $prescription->dose, ['class' => 'form-control' . ($errors->has('dose') ? ' is-invalid' : ''), 'placeholder' => 'Dosis']) }}
            {!! $errors->first('dose', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('amount', $prescription->amount, ['class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('indicacion') }}
            {{ Form::text('indications', $prescription->indications, ['class' => 'form-control' . ($errors->has('indications') ? ' is-invalid' : ''), 'placeholder' => 'Indicacion']) }}
            {!! $errors->first('indications', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duracion') }}
            {{ Form::text('duration', $prescription->duration, ['class' => 'form-control' . ($errors->has('duration') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
            {!! $errors->first('duration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $prescription->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consultacion') }}
            {{ Form::text('consultation', $prescription->consultation, ['class' => 'form-control' . ($errors->has('consultation') ? ' is-invalid' : ''), 'placeholder' => 'Consultacion']) }}
            {!! $errors->first('consultation', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>