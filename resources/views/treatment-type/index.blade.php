@extends('layouts.app')

@section('template_title')
    Treatment Type
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo de Tratamiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('treatment-type.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Tipo de Tratamiento') }}
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
                                        
										<th>Codigo de Tipo de Tratamiento</th>
										<th>Tipo de Tratamiento</th>
										<th>Concepto</th>
										<th>Fecha de Registro</th>
										<th>Tipo de Gravedad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($treatmentTypes as $treatmentType)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $treatmentType->treatment_type_code }}</td>
											<td>{{ $treatmentType->tratment_type }}</td>
											<td>{{ $treatmentType->concept }}</td>
											<td>{{ $treatmentType->register_date }}</td>
											<td>{{ $treatmentType->severity_type }}</td>

                                            <td>
                                                <form action="{{ route('treatment-type.destroy',$treatmentType->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('treatment-type.show',$treatmentType->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('treatment-type.edit',$treatmentType->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $treatmentTypes->links() !!}
            </div>
        </div>
    </div>
@endsection
