@extends('layouts.app')

@section('template_title')
    {{ $disease->name ?? "{{ __('Show') Disease" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Disease</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('disease.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Disease Code:</strong>
                            {{ $disease->disease_code }}
                        </div>
                        <div class="form-group">
                            <strong>Disease:</strong>
                            {{ $disease->disease }}
                        </div>
                        <div class="form-group">
                            <strong>Concept:</strong>
                            {{ $disease->concept }}
                        </div>
                        <div class="form-group">
                            <strong>Symptoms:</strong>
                            {{ $disease->symptoms }}
                        </div>
                        <div class="form-group">
                            <strong>Register Date:</strong>
                            {{ $disease->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Treatment Type:</strong>
                            {{ $disease->treatment_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
