<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo de Tipo de Examen') }}
            {{ Form::text('exam_type_code', $examType->exam_type_code, ['class' => 'form-control' . ($errors->has('exam_type_code') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de Tipo de Examen']) }}
            {!! $errors->first('exam_type_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Examen') }}
            {{ Form::text('exam_type', $examType->exam_type, ['class' => 'form-control' . ($errors->has('exam_type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Examen']) }}
            {!! $errors->first('exam_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concept', $examType->concept, ['class' => 'form-control' . ($errors->has('concept') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $examType->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>