@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Patient
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Paciente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('patient.update', $patient->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('patient.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
