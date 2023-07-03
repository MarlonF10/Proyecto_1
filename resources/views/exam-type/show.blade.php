@extends('layouts.app')

@section('template_title')
    {{ $examType->name ?? "{{ __('Show') Exam Type" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Tipo de Examen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exam-type.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo de Tipo de Examen:</strong>
                            {{ $examType->exam_type_code }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Examen:</strong>
                            {{ $examType->exam_type }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $examType->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $examType->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
