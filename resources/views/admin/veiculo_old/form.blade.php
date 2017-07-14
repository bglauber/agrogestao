<div class="form-group {{ $errors->has('nome_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('nome_veiculo', 'Nome', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nome_veiculo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nome_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dsc_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('dsc_veiculo', 'Descrição', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('dsc_veiculo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dsc_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipo_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('tipo_veiculo', 'Tipo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tipo_veiculo', ['technology', 'tips', 'health'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipo_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'Usuário', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('user_id', $usuarios, null, ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
