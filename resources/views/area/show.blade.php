@extends('layouts.app')

@section('template_title')
    {{ $area->name ?? "{{ __('Show') Area" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Area</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('areas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Area:</strong>
                            {{ $area->area_code }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $area->area }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $area->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $area->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
