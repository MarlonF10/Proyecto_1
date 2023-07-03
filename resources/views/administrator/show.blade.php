@extends('layouts.app')

@section('template_title')
    {{ $administrator->name ?? "{{ __('Show') Administrator" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Administrador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administrator.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>nombre:</strong>
                            {{ $administrator->name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $administrator->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $administrator->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $administrator->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $administrator->age }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $administrator->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $administrator->address }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $administrator->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $administrator->email }}
                        </div>
                        <div class="form-group">
                            <strong>Url Image:</strong>
                            {{ $administrator->URL_image }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Imagen:</strong>
                            {{ $administrator->image_name }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $administrator->departament }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $administrator->municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $administrator->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
