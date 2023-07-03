@extends('layouts.app')

@section('template_title')
    Prescription
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prescripcion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('prescription.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Prescripcion') }}
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
                                        
										<th>Codigo de Prescripcion</th>
										<th>Medicina</th>
										<th>Dosis</th>
										<th>Cantidad</th>
										<th>Indicaion</th>
										<th>Duracion</th>
										<th>Fecha de Registro</th>
										<th>Consultacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prescriptions as $prescription)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $prescription->prescription_code }}</td>
											<td>{{ $prescription->medicine }}</td>
											<td>{{ $prescription->dose }}</td>
											<td>{{ $prescription->amount }}</td>
											<td>{{ $prescription->indications }}</td>
											<td>{{ $prescription->duration }}</td>
											<td>{{ $prescription->register_date }}</td>
											<td>{{ $prescription->consultation }}</td>

                                            <td>
                                                <form action="{{ route('prescription.destroy',$prescription->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('prescription.show',$prescription->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('prescription.edit',$prescription->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $prescriptions->links() !!}
            </div>
        </div>
    </div>
@endsection
