@extends('layouts.app')

@section('template_title')
    Medical File
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Expediente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('medical-file.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Expediente') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo de Expediente</th>
										<th>Fecha de Registro</th>
										<th>Consultacion</th>
										<th>Prescripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicalFiles as $medicalFile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $medicalFile->medical_file_code }}</td>
											<td>{{ $medicalFile->register_date }}</td>
											<td>{{ $medicalFile->consultation }}</td>
											<td>{{ $medicalFile->prescription }}</td>

                                            <td>
                                                <form action="{{ route('medical-file.destroy',$medicalFile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('medical-file.show',$medicalFile->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('medical-file.edit',$medicalFile->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $medicalFiles->links() !!}
            </div>
        </div>
    </div>
@endsection
