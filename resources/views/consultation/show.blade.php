@extends('layouts.app')

@section('template_title')
    {{ $consultation->name ?? "{{ __('Show') Consultation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consultation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultation.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Consultacion:</strong>
                            {{ $consultation->consultation_code }}
                        </div>
                        <div class="form-group">
                            <strong>Presion Arterial:</strong>
                            {{ $consultation->blood_pressure }}
                        </div>
                        <div class="form-group">
                            <strong>Temperatura:</strong>
                            {{ $consultation->temperature }}
                        </div>
                        <div class="form-group">
                            <strong>Frecuencia Respiratoria:</strong>
                            {{ $consultation->breathing_frequency }}
                        </div>
                        <div class="form-group">
                            <strong>Ritmo Cardiaco:</strong>
                            {{ $consultation->heart_rate }}
                        </div>
                        <div class="form-group">
                            <strong>Saturacion:</strong>
                            {{ $consultation->saturation }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Corporal:</strong>
                            {{ $consultation->body_weight }}
                        </div>
                        <div class="form-group">
                            <strong>Altura de Cuerpo:</strong>
                            {{ $consultation->body_height }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo de Simtomas:</strong>
                            {{ $consultation->time_symptoms }}
                        </div>
                        <div class="form-group">
                            <strong>Examen Fisico:</strong>
                            {{ $consultation->physical_exam }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $consultation->patient }}
                        </div>
                        <div class="form-group">
                            <strong>Antecedente:</strong>
                            {{ $consultation->antecedent }}
                        </div>
                        <div class="form-group">
                            <strong>Exam:</strong>
                            {{ $consultation->exam }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedad:</strong>
                            {{ $consultation->disease }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Gravedad:</strong>
                            {{ $consultation->severity_type }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Tratamiento:</strong>
                            {{ $consultation->tratment_type }}
                        </div>
                        <div class="form-group">
                            <strong>Doctor:</strong>
                            {{ $consultation->doctor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
