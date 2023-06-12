@extends('layouts.app')

@section('template_title')
    {{ $vacunadet->name ?? "{{ __('Show') Vacunadet" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vacunadet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vacunadets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Vacuna Id:</strong>
                            {{ $vacunadet->vacuna_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ganado Id:</strong>
                            {{ $vacunadet->ganado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Dosis:</strong>
                            {{ $vacunadet->fecha_dosis }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Proxima Dosis:</strong>
                            {{ $vacunadet->fecha_proxima_dosis }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
