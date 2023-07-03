@extends('layouts.app')

@section('template_title')
    Disease
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Enfermedad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('disease.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Enfermedad') }}
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
                                        
										<th>Codigo de Enferm</th>
										<th>Disease</th>
										<th>Concept</th>
										<th>Symptoms</th>
										<th>Register Date</th>
										<th>Treatment Type</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diseases as $disease)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $disease->disease_code }}</td>
											<td>{{ $disease->disease }}</td>
											<td>{{ $disease->concept }}</td>
											<td>{{ $disease->symptoms }}</td>
											<td>{{ $disease->register_date }}</td>
											<td>{{ $disease->treatment_type }}</td>

                                            <td>
                                                <form action="{{ route('disease.destroy',$disease->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('disease.show',$disease->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('disease.edit',$disease->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $diseases->links() !!}
            </div>
        </div>
    </div>
@endsection
