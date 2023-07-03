@extends('layouts.app')

@section('template_title')
    Appointment
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('appointment.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Cita') }}
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
                                        
										<th>Codigo de Cita</th>
										<th>Fecha de Cita</th>
										<th>Fecha de Proxima Cita</th>
										<th>Condicion</th>
										<th>Fecha de Registro</th>
										<th>Paciente</th>
										<th>Doctor</th>
										<th>Horario de Cita</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appointment->appointment_code }}</td>
											<td>{{ $appointment->appointment_date }}</td>
											<td>{{ $appointment->next_appointment_date }}</td>
											<td>{{ $appointment->condition }}</td>
											<td>{{ $appointment->register_date }}</td>
											<td>{{ $appointment->patient }}</td>
											<td>{{ $appointment->doctor }}</td>
											<td>{{ $appointment->appointment_time }}</td>

                                            <td>
                                                <form action="{{ route('appointment.destroy',$appointment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appointment.show',$appointment->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('appointment.edit',$appointment->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $appointments->links() !!}
            </div>
        </div>
    </div>
@endsection
