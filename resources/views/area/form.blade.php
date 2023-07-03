<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Area') }}
            {{ Form::text('area_code', $area->area_code, ['class' => 'form-control' . ($errors->has('area_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Area']) }}
            {!! $errors->first('area_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::text('area', $area->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Concepto') }}
            {{ Form::text('concept', $area->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $area->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>