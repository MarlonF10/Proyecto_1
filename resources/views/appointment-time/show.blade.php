@extends('layouts.app')

@section('template_title')
    {{ $appointmentTime->name ?? "{{ __('Ver') Horario de Cita" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Appointment Time</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('appointment-time.index') }}"> {{ __('Vollver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Horario de Cita:</strong>
                            {{ $appointmentTime->appointment_time_code }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $appointmentTime->day }}
                        </div>
                        <div class="form-group">
                            <strong>Cambio:</strong>
                            {{ $appointmentTime->shift }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo de inicio:</strong>
                            {{ $appointmentTime->star_time }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo de Finalizacion:</strong>
                            {{ $appointmentTime->finish_time }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $appointmentTime->condition }}
                        </div>
                        <div class="form-group">
                            <strong>Doctor:</strong>
                            {{ $appointmentTime->doctor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
