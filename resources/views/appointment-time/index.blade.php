@extends('layouts.app')

@section('template_title')
    Appointment Time
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario de Cita') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('appointment-time.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Horario de Citas') }}
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
                                        
										<th>Codigo de Horario de Citas</th>
										<th>Dia</th>
										<th>Cambio</th>
										<th>Tiempo de inicio</th>
										<th>Tiempo de Finalizacion </th>
										<th>Condicion</th>
										<th>Doctor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointmentTimes as $appointmentTime)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appointmentTime->appointment_time_code }}</td>
											<td>{{ $appointmentTime->day }}</td>
											<td>{{ $appointmentTime->shift }}</td>
											<td>{{ $appointmentTime->star_time }}</td>
											<td>{{ $appointmentTime->finish_time }}</td>
											<td>{{ $appointmentTime->condition }}</td>
											<td>{{ $appointmentTime->doctor }}</td>

                                            <td>
                                                <form action="{{ route('appointment-time.destroy',$appointmentTime->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appointment-time.show',$appointmentTime->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('appointment-time.edit',$appointmentTime->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $appointmentTimes->links() !!}
            </div>
        </div>
    </div>
@endsection
