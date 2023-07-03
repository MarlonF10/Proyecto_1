@extends('layouts.app')

@section('template_title')
    Consulting Room
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consultorio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consulting-rooms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Consultorio') }}
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
                                        
										<th>Codigo de Consultorio</th>
										<th>Numero de Consultorio</th>
										<th>Concepto</th>
										<th>Condicion</th>
										<th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultingRooms as $consultingRoom)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consultingRoom->consulting_room_code }}</td>
											<td>{{ $consultingRoom->consulting_room_number }}</td>
											<td>{{ $consultingRoom->concept }}</td>
											<td>{{ $consultingRoom->condition }}</td>
											<td>{{ $consultingRoom->register_date }}</td>

                                            <td>
                                                <form action="{{ route('consulting-rooms.destroy',$consultingRoom->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consulting-rooms.show',$consultingRoom->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consulting-rooms.edit',$consultingRoom->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $consultingRooms->links() !!}
            </div>
        </div>
    </div>
@endsection
