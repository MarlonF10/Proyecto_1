@extends('layouts.app')

@section('template_title')
    {{ $patient->name ?? "{{ __('Show') Patient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('patient.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $patient->name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $patient->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $patient->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $patient->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $patient->age }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $patient->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $patient->address }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $patient->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $patient->email }}
                        </div>
                        <div class="form-group">
                            <strong>Url Image:</strong>
                            {{ $patient->URL_image }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Imagen:</strong>
                            {{ $patient->image_name }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $patient->departament }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $patient->municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $patient->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
