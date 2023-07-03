@extends('layouts.app')

@section('template_title')
    {{ $speciality->name ?? "{{ __('Show') Speciality" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Especialidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('specialities.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Especialidad:</strong>
                            {{ $specialities->speciality_code }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $specialities->speciality }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $specialities->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $specialities->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
