@extends('layouts.app')

@section('template_title')
    {{ $medicalFile->name ?? "{{ __('Show') Medical File" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Expediente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medical-file.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Expediente:</strong>
                            {{ $medicalFile->medical_file_code }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $medicalFile->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Consultacion:</strong>
                            {{ $medicalFile->consultation }}
                        </div>
                        <div class="form-group">
                            <strong>Prescripcion:</strong>
                            {{ $medicalFile->prescription }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
