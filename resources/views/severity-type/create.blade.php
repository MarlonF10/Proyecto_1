@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Severity Type
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Tipo de Gravedad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('severity-type.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('severity-type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
