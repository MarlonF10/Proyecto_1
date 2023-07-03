@extends('layouts.app')

@section('template_title')
    Exam Type
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo de Examen') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('exam-type.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Tipo de Examen') }}
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
                                        
										<th>Codigo de Tipo de Examen</th>
										<th>Tipo de Examen</th>
										<th>Concepto</th>
										<th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($examTypes as $examType)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $examType->exam_type_code }}</td>
											<td>{{ $examType->exam_type }}</td>
											<td>{{ $examType->concept }}</td>
											<td>{{ $examType->register_date }}</td>

                                            <td>
                                                <form action="{{ route('exam-type.destroy',$examType->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('exam-type.show',$examType->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('exam-type.edit',$examType->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $examTypes->links() !!}
            </div>
        </div>
    </div>
@endsection
