@extends('layouts.app')

@section('template_title')
    Consultation
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consultacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consultation.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Consultas') }}
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
                                        
										<th>Codigo de Consultacion</th>
										<th>Presion Arterial</th>
										<th>Temperatura</th>
										<th>Frecuencia Respiratoria</th>
										<th>Ritmo cardiaco</th>
										<th>Saturacion</th>
										<th>Peso Corporal</th>
										<th>Altura de Cuerpo</th>
										<th>Tiempo de simtomas</th>
										<th>Examen Fisico</th>
										<th>paciente</th>
										<th>Antecedente</th>
										<th>Examen</th>
										<th>Enfermedad</th>
										<th>Tipo de Gravedad</th>
										<th>Tipo de Tratamiento</th>
										<th>Doctor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultations as $consultation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consultation->consultation_code }}</td>
											<td>{{ $consultation->blood_pressure }}</td>
											<td>{{ $consultation->temperature }}</td>
											<td>{{ $consultation->breathing_frequency }}</td>
											<td>{{ $consultation->heart_rate }}</td>
											<td>{{ $consultation->saturation }}</td>
											<td>{{ $consultation->body_weight }}</td>
											<td>{{ $consultation->body_height }}</td>
											<td>{{ $consultation->time_symptoms }}</td>
											<td>{{ $consultation->physical_exam }}</td>
											<td>{{ $consultation->patient }}</td>
											<td>{{ $consultation->antecedent }}</td>
											<td>{{ $consultation->exam }}</td>
											<td>{{ $consultation->disease }}</td>
											<td>{{ $consultation->severity_type }}</td>
											<td>{{ $consultation->tratment_type }}</td>
											<td>{{ $consultation->doctor }}</td>

                                            <td>
                                                <form action="{{ route('consultation.destroy',$consultation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consultation.show',$consultation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consultation.edit',$consultation->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $consultations->links() !!}
            </div>
        </div>
    </div>
@endsection
