@extends('layouts.app')

@section('template_title')
    Exam
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Examen') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('exam.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Examen') }}
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
                                        
										<th>Codigo de Examen</th>
										<th>Resultados</th>
										<th>Doctor</th>
										<th>Paciente</th>
										<th>Tipo de Examen</th>
										<th>Tipo de Gravedad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $exam)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $exam->exam_code }}</td>
											<td>{{ $exam->results }}</td>
											<td>{{ $exam->doctor }}</td>
											<td>{{ $exam->patient }}</td>
											<td>{{ $exam->exam_type }}</td>
											<td>{{ $exam->severity_type }}</td>

                                            <td>
                                                <form action="{{ route('exam.destroy',$exam->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('exam.show',$exam->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('exam.edit',$exam->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $exams->links() !!}
            </div>
        </div>
    </div>
@endsection
