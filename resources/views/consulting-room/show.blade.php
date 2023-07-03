@extends('layouts.app')

@section('template_title')
    {{ $consultingRoom->name ?? "{{ __('Show') Consulting Room" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Consultorio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consulting-rooms.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Consultorio:</strong>
                            {{ $consultingRoom->consulting_room_code }}
                        </div>
                        <div class="form-group">
                            <strong>Numero de Consultorio:</strong>
                            {{ $consultingRoom->consulting_room_number }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $consultingRoom->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $consultingRoom->condition }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $consultingRoom->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
