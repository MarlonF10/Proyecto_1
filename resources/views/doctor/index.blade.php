@extends('layouts.app')

@section('template_title')
    Doctor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doctor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('doctor.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Doctor') }}
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
										<th>Area</th>
										<th>Especialidad</th>
										<th>Consultorio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $doctor->name }}</td>
											<td>{{ $doctor->first_name }}</td>
											<td>{{ $doctor->second_name }}</td>
											<td>{{ $doctor->DNI }}</td>
											<td>{{ $doctor->age }}</td>
											<td>{{ $doctor->gender }}</td>
											<td>{{ $doctor->address }}</td>
											<td>{{ $doctor->phone_number }}</td>
											<td>{{ $doctor->email }}</td>
											<td>{{ $doctor->URL_image }}</td>
											<td>{{ $doctor->image_name }}</td>
											<td>{{ $doctor->departament }}</td>
											<td>{{ $doctor->municipality }}</td>
											<td>{{ $doctor->register_date }}</td>
											<td>{{ $doctor->area }}</td>
											<td>{{ $doctor->speciality }}</td>
											<td>{{ $doctor->consulting_room }}</td>

                                            <td>
                                                <form action="{{ route('doctor.destroy',$doctor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doctor.show',$doctor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doctor.edit',$doctor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $doctors->links() !!}
            </div>
        </div>
    </div>
@endsection
