@extends('layouts.app')

@section('template_title')
    {{ $appointment->name ?? "{{ __('Show') Appointment" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Citas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('appointment.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>codigo de Cita:</strong>
                            {{ $appointment->appointment_code }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Cita:</strong>
                            {{ $appointment->appointment_date }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Proxima Cita:</strong>
                            {{ $appointment->next_appointment_date }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $appointment->condition }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $appointment->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $appointment->patient }}
                        </div>
                        <div class="form-group">
                            <strong>Doctor:</strong>
                            {{ $appointment->doctor }}
                        </div>
                        <div class="form-group">
                            <strong>Horario de Cita:</strong>
                            {{ $appointment->appointment_time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
