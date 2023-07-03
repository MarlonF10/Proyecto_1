@extends('layouts.app')

@section('template_title')
    Recepcionist
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recepcionista') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recepcionist.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Recepcionista') }}
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recepcionists as $recepcionist)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recepcionist->name }}</td>
											<td>{{ $recepcionist->first_name }}</td>
											<td>{{ $recepcionist->second_name }}</td>
											<td>{{ $recepcionist->DNI }}</td>
											<td>{{ $recepcionist->age }}</td>
											<td>{{ $recepcionist->gender }}</td>
											<td>{{ $recepcionist->address }}</td>
											<td>{{ $recepcionist->phone_number }}</td>
											<td>{{ $recepcionist->email }}</td>
											<td>{{ $recepcionist->URL_image }}</td>
											<td>{{ $recepcionist->image_name }}</td>
											<td>{{ $recepcionist->departament }}</td>
											<td>{{ $recepcionist->municipality }}</td>
											<td>{{ $recepcionist->register_date }}</td>
											<td>{{ $recepcionist->area }}</td>

                                            <td>
                                                <form action="{{ route('recepcionist.destroy',$recepcionist->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recepcionist.show',$recepcionist->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recepcionist.edit',$recepcionist->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $recepcionists->links() !!}
            </div>
        </div>
    </div>
@endsection
