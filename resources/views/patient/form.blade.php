<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $patient->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Nombre') }}
            {{ Form::text('first_name', $patient->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Nombre') }}
            {{ Form::text('second_name', $patient->second_name, ['class' => 'form-control' . ($errors->has('second_name') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('second_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $patient->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('age', $patient->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Genero') }}
            {{ Form::text('gender', $patient->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('address', $patient->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Telefonico') }}
            {{ Form::text('phone_number', $patient->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Numero Telefonico']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $patient->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL_image') }}
            {{ Form::text('URL_image', $patient->URL_image, ['class' => 'form-control' . ($errors->has('URL_image') ? ' is-invalid' : ''), 'placeholder' => 'Url Image']) }}
            {!! $errors->first('URL_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de Imagen') }}
            {{ Form::text('image_name', $patient->image_name, ['class' => 'form-control' . ($errors->has('image_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de Imagen']) }}
            {!! $errors->first('image_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::text('departament', $patient->departament, ['class' => 'form-control' . ($errors->has('departament') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('departament', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::text('municipality', $patient->municipality, ['class' => 'form-control' . ($errors->has('municipality') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('register_date', $patient->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>