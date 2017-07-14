<div class="form-group {{ $errors->has('nome_fabricante') ? 'has-error' : ''}}">
    {!! Form::label('nome_fabricante', 'Nome Fabricante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nome_fabricante', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nome_fabricante', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('obs_fabricante') ? 'has-error' : ''}}">
    {!! Form::label('obs_fabricante', 'Obs Fabricante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('obs_fabricante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('obs_fabricante', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
