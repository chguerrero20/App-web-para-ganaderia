@extends('layouts.app')

@section('template_title')
    Vacunadet
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vacunadet') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vacunadets.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Vacuna Id</th>
										<th>Ganado Id</th>
										<th>Fecha Dosis</th>
										<th>Fecha Proxima Dosis</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacunadets as $vacunadet)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vacunadet->vacuna_id }}</td>
											<td>{{ $vacunadet->ganado_id }}</td>
											<td>{{ $vacunadet->fecha_dosis }}</td>
											<td>{{ $vacunadet->fecha_proxima_dosis }}</td>

                                            <td>
                                                <form action="{{ route('vacunadets.destroy',$vacunadet->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vacunadets.show',$vacunadet->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vacunadets.edit',$vacunadet->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $vacunadets->links() !!}
            </div>
        </div>
    </div>
@endsection
