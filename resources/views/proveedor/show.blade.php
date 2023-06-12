@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? "{{ __('Show') Proveedor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $proveedor->proveedor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
