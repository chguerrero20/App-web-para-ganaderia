<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('vacuna') }}
            {{ Form::text('vacuna', $vacuna->vacuna, ['class' => 'form-control' . ($errors->has('vacuna') ? ' is-invalid' : ''), 'placeholder' => 'Vacuna']) }}
            {!! $errors->first('vacuna', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>