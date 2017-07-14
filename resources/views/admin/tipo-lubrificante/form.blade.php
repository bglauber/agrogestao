<div class="form-group {{ $errors->has('tipo_lubrificante') ? 'has-error' : ''}}">
    {!! Form::label('tipo_lubrificante', 'Tipo Lubrificante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipo_lubrificante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipo_lubrificante', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dsc_tipo_lubrificante') ? 'has-error' : ''}}">
    {!! Form::label('dsc_tipo_lubrificante', 'Dsc Tipo Lubrificante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('dsc_tipo_lubrificante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dsc_tipo_lubrificante', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
