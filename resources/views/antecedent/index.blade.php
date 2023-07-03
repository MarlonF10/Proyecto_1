@extends('layouts.app')

@section('template_title')
    Antecedent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Antecedente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('antecedent.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Antecedente') }}
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
                                        
										<th>Codigo de Antecedente</th>
										<th>Antecedente</th>
										<th>Concepto</th>
										<th>Fecha de Registro</th>
										<th>Tipo de Tratamiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($antecedents as $antecedent)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $antecedent->antecedent_code }}</td>
											<td>{{ $antecedent->antecedent }}</td>
											<td>{{ $antecedent->concept }}</td>
											<td>{{ $antecedent->register_date }}</td>
											<td>{{ $antecedent->treatment_type }}</td>

                                            <td>
                                                <form action="{{ route('antecedent.destroy',$antecedent->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('antecedent.show',$antecedent->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('antecedent.edit',$antecedent->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('Delete')
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
                {!! $antecedents->links() !!}
            </div>
        </div>
    </div>
@endsection
