@extends('layouts.app')

@section('template_title')
    {{ $severityType->name ?? "{{ __('Show') Severity Type" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Tipo de Gravedad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('severity-type.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Tipo de Gravedad:</strong>
                            {{ $severityType->severity_type_code }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Gravedad:</strong>
                            {{ $severityType->severity_type }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $severityType->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $severityType->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
