@extends('layouts.app')

@section('template_title')
    {{ $setting->name ?? "{{ __('Show') Setting" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Perfil</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('setting.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de Negocio:</strong>
                            {{ $setting->business_name }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $setting->RUC }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $setting->address }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefonico:</strong>
                            {{ $setting->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $setting->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fechade Registro:</strong>
                            {{ $setting->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
