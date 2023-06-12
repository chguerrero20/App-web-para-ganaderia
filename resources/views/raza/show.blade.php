@extends('layouts.app')

@section('template_title')
    {{ $raza->name ?? "{{ __('Show') Raza" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Raza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('razas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $raza->raza }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $raza->tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
