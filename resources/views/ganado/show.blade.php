@extends('layouts.app')

@section('template_title')
    {{ $ganado->name ?? "{{ __('Show') Ganado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ganado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ganados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ganado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $ganado->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $ganado->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $ganado->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Raza Id:</strong>
                            {{ $ganado->raza_id }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $ganado->proveedor_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
