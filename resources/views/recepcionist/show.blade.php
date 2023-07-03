@extends('layouts.app')

@section('template_title')
    {{ $recepcionist->name ?? "{{ __('Show') Recepcionist" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Recepcionist</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recepcionist.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $recepcionist->name }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $recepcionist->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $recepcionist->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $recepcionist->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $recepcionist->age }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $recepcionist->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $recepcionist->address }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $recepcionist->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $recepcionist->email }}
                        </div>
                        <div class="form-group">
                            <strong>Url Image:</strong>
                            {{ $recepcionist->URL_image }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Imagen:</strong>
                            {{ $recepcionist->image_name }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $recepcionist->departament }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $recepcionist->municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $recepcionist->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $recepcionist->area }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
