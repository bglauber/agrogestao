<div class="form-group {{ $errors->has('nome_tipo_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('nome_tipo_veiculo', 'Nome Tipo Veiculo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nome_tipo_veiculo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nome_tipo_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dsc_tipo_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('dsc_tipo_veiculo', 'Dsc Tipo Veiculo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('dsc_tipo_veiculo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dsc_tipo_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
