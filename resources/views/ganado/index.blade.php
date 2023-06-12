@extends('layouts.app')

@section('template_title')
    Ganado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ganado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ganados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Nombre</th>
										<th>Numero</th>
										<th>Sexo</th>
										<th>Peso</th>
										<th>Raza</th>
										<th>Proveedor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ganados as $ganado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ganado->nombre }}</td>
											<td>{{ $ganado->numero }}</td>
											<td>{{ $ganado->sexo }}</td>
											<td>{{ $ganado->peso }}</td>
											<td>{{ $ganado->raza_id }}</td>
											<td>{{ $ganado->proveedor_id }}</td>

                                            <td>
                                                <form action="{{ route('ganados.destroy',$ganado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ganados.show',$ganado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ganados.edit',$ganado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ganados->links() !!}
            </div>
        </div>
    </div>
@endsection
