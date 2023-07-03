@extends('layouts.app')

@section('template_title')
    {{ $doctor->name ?? "{{ __('Show') Doctor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctor.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $doctor->name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $doctor->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $doctor->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $doctor->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $doctor->age }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $doctor->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $doctor->address }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $doctor->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $doctor->email }}
                        </div>
                        <div class="form-group">
                            <strong>Url Image:</strong>
                            {{ $doctor->URL_image }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Imagen:</strong>
                            {{ $doctor->image_name }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $doctor->departament }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $doctor->municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $doctor->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $doctor->area }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $doctor->speciality }}
                        </div>
                        <div class="form-group">
                            <strong>Consultorio:</strong>
                            {{ $doctor->consulting_room }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
