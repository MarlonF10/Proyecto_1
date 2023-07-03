@extends('layouts.app')

@section('template_title')
    {{ $antecedent->name ?? "{{ __('Show') Antecedent" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Antecedente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('antecedent.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Antecedente:</strong>
                            {{ $antecedent->antecedent_code }}
                        </div>
                        <div class="form-group">
                            <strong>Antecedente:</strong>
                            {{ $antecedent->antecedent }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $antecedent->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $antecedent->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Tratamiento:</strong>
                            {{ $antecedent->treatment_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
