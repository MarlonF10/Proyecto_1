@extends('layouts.app')

@section('template_title')
    Speciality
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Especialidad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('specialities.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Especialidad') }}
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
                                        
										<th>Codigo de Especialidad</th>
										<th>Especialidad</th>
										<th>Concepto</th>
										<th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specialities as $speciality)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $speciality->speciality_code }}</td>
											<td>{{ $speciality->speciality }}</td>
											<td>{{ $speciality->concept }}</td>
											<td>{{ $speciality->register_date }}</td>

                                            <td>
                                                <form action="{{ route('specialities.destroy',$speciality->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('specialities.show',$speciality->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('specialities.edit',$speciality->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $specialities->links() !!}
            </div>
        </div>
    </div>
@endsection
