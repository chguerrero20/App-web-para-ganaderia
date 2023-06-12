<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('vacuna_id') }}
            {{ Form::text('vacuna_id', $vacunadet->vacuna_id, ['class' => 'form-control' . ($errors->has('vacuna_id') ? ' is-invalid' : ''), 'placeholder' => 'Vacuna Id']) }}
            {!! $errors->first('vacuna_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ganado_id') }}
            {{ Form::text('ganado_id', $vacunadet->ganado_id, ['class' => 'form-control' . ($errors->has('ganado_id') ? ' is-invalid' : ''), 'placeholder' => 'Ganado Id']) }}
            {!! $errors->first('ganado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_dosis') }}
            {{ Form::text('fecha_dosis', $vacunadet->fecha_dosis, ['class' => 'form-control' . ($errors->has('fecha_dosis') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Dosis']) }}
            {!! $errors->first('fecha_dosis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_proxima_dosis') }}
            {{ Form::text('fecha_proxima_dosis', $vacunadet->fecha_proxima_dosis, ['class' => 'form-control' . ($errors->has('fecha_proxima_dosis') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Proxima Dosis']) }}
            {!! $errors->first('fecha_proxima_dosis', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>