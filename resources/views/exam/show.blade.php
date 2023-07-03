@extends('layouts.app')

@section('template_title')
    {{ $exam->name ?? "{{ __('Show') Exam" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Examen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exam.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Examen:</strong>
                            {{ $exam->exam_code }}
                        </div>
                        <div class="form-group">
                            <strong>Resultados:</strong>
                            {{ $exam->results }}
                        </div>
                        <div class="form-group">
                            <strong>Doctor:</strong>
                            {{ $exam->doctor }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $exam->patient }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Examen:</strong>
                            {{ $exam->exam_type }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Gravedad:</strong>
                            {{ $exam->severity_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
