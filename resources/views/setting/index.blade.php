@extends('layouts.app')

@section('template_title')
    Setting
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Perfil Empresarial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('setting.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Perfil') }}
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
                                        
										<th>Nombre de Negocio</th>
										<th>Ruc</th>
										<th>Direccion</th>
										<th>Numero Telefonico</th>
										<th>Email</th>
										<th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $setting->business_name }}</td>
											<td>{{ $setting->RUC }}</td>
											<td>{{ $setting->address }}</td>
											<td>{{ $setting->phone_number }}</td>
											<td>{{ $setting->email }}</td>
											<td>{{ $setting->register_date }}</td>

                                            <td>
                                                <form action="{{ route('setting.destroy',$setting->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('setting.show',$setting->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('setting.edit',$setting->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $settings->links() !!}
            </div>
        </div>
    </div>
@endsection
