@extends('layouts.app')

@section('template_title')
    Severity Type
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo de Gravedad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('severity-type.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo de Tipo de Gravedad') }}
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
                                        
										<th>Codigo de Tipo de Gravedad</th>
										<th>Tipo de gravedad</th>
										<th>Concepto</th>
										<th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($severityTypes as $severityType)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $severityType->severity_type_code }}</td>
											<td>{{ $severityType->severity_type }}</td>
											<td>{{ $severityType->concept }}</td>
											<td>{{ $severityType->register_date }}</td>

                                            <td>
                                                <form action="{{ route('severity-type.destroy',$severityType->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('severity-type.show',$severityType->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('severity-type.edit',$severityType->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edita') }}</a>
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
                {!! $severityTypes->links() !!}
            </div>
        </div>
    </div>
@endsection
