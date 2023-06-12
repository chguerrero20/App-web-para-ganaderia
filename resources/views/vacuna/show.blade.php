@extends('layouts.app')

@section('template_title')
    {{ $vacuna->name ?? "{{ __('Show') Vacuna" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vacuna</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vacunas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Vacuna:</strong>
                            {{ $vacuna->vacuna }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
