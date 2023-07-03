@extends('layouts.app')

@section('template_title')
    {{ $treatmentType->name ?? "{{ __('Show') Treatment Type" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Tipo de Tratamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('treatment-type.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>codigo de Tipo de Tratamiento:</strong>
                            {{ $treatmentType->treatment_type_code }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Tratamiento:</strong>
                            {{ $treatmentType->tratment_type }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $treatmentType->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $treatmentType->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Gravedad:</strong>
                            {{ $treatmentType->severity_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
