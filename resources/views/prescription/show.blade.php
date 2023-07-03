@extends('layouts.app')

@section('template_title')
    {{ $prescription->name ?? "{{ __('Show') Prescription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Prescripcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prescription.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Prescricion:</strong>
                            {{ $prescription->prescription_code }}
                        </div>
                        <div class="form-group">
                            <strong>Medicina:</strong>
                            {{ $prescription->medicine }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $prescription->dose }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $prescription->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Indicacion:</strong>
                            {{ $prescription->indications }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $prescription->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $prescription->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Consultacion:</strong>
                            {{ $prescription->consultation }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
