@extends('layouts.app')

@section('template_title')
    Administrador
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrador') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('administrator.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Administrador') }}
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
										<th>Primer Nombrre</th>
										<th>Segundo Nombre </th>
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
                                    @foreach ($administrators as $administrator)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $administrator->name }}</td>
											<td>{{ $administrator->first_name }}</td>
											<td>{{ $administrator->second_name }}</td>
											<td>{{ $administrator->DNI }}</td>
											<td>{{ $administrator->age }}</td>
											<td>{{ $administrator->gender }}</td>
											<td>{{ $administrator->address }}</td>
											<td>{{ $administrator->phone_number }}</td>
											<td>{{ $administrator->email }}</td>
											<td>{{ $administrator->URL_image }}</td>
											<td>{{ $administrator->image_name }}</td>
											<td>{{ $administrator->departament }}</td>
											<td>{{ $administrator->municipality }}</td>
											<td>{{ $administrator->register_date }}</td>

                                            <td>
                                                <form action="{{ route('administrator.destroy',$administrator->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('administrator.show',$administrator->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('administrator.edit',$administrator->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $administrators->links() !!}
            </div>
        </div>
    </div>
@endsection
