@extends('layouts.app')

@section('template_title')
    Patient
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('patient.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Paciente') }}
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
                                        
										<th>Nombre</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Dni</th>
										<th>Edad</th>
										<th>Genero</th>
										<th>Direccion</th>
										<th>Numero Telefonico</th>
										<th>Email</th>
										<th>Url Image</th>
										<th>Nombre de Imagen</th>
										<th>Departamento</th>
										<th>Municipio</th>
										<th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $patient->name }}</td>
											<td>{{ $patient->first_name }}</td>
											<td>{{ $patient->second_name }}</td>
											<td>{{ $patient->DNI }}</td>
											<td>{{ $patient->age }}</td>
											<td>{{ $patient->gender }}</td>
											<td>{{ $patient->address }}</td>
											<td>{{ $patient->phone_number }}</td>
											<td>{{ $patient->email }}</td>
											<td>{{ $patient->URL_image }}</td>
											<td>{{ $patient->image_name }}</td>
											<td>{{ $patient->departament }}</td>
											<td>{{ $patient->municipality }}</td>
											<td>{{ $patient->register_date }}</td>

                                            <td>
                                                <form action="{{ route('patient.destroy',$patient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('patient.show',$patient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('patient.edit',$patient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $patients->links() !!}
            </div>
        </div>
    </div>
@endsection
