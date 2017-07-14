<div class="form-group {{ $errors->has('nome_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('nome_veiculo', 'Nome Veiculo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nome_veiculo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nome_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('id_tipo_veiculo') ? 'has-error' : ''}}">
{!! Form::label('id_tipo_veiculo', 'Id Tipo Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::select('id_tipo_veiculo', $tiposVeiculos, null, ['class' => 'form-control']) !!}
    {!! $errors->first('id_tipo_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('id_fabricante_veiculo') ? 'has-error' : ''}}">
{!! Form::label('id_fabricante_veiculo', 'Id Fabricante Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::select('id_fabricante_veiculo', $fabricantes, null, ['class' => 'form-control']) !!}
    {!! $errors->first('id_fabricante_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('modelo_veiculo') ? 'has-error' : ''}}">
{!! Form::label('modelo_veiculo', 'Modelo Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::text('modelo_veiculo', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('modelo_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('chassi_veiculo') ? 'has-error' : ''}}">
{!! Form::label('chassi_veiculo', 'Chassi Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::text('chassi_veiculo', null, ['class' => 'form-control']) !!}
    {!! $errors->first('chassi_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('renavam_veiculo') ? 'has-error' : ''}}">
{!! Form::label('renavam_veiculo', 'Renavam Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::text('renavam_veiculo', null, ['class' => 'form-control']) !!}
    {!! $errors->first('renavam_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('ano_fabricacao_veiculo') ? 'has-error' : ''}}">
{!! Form::label('ano_fabricacao_veiculo', 'Ano Fabricacao Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::number('ano_fabricacao_veiculo', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('ano_fabricacao_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group {{ $errors->has('ano_modelo_veiculo') ? 'has-error' : ''}}">
{!! Form::label('ano_modelo_veiculo', 'Ano Modelo Veiculo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::number('ano_modelo_veiculo', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('ano_modelo_veiculo', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group {{ $errors->has('valor_fabricacao_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('valor_aquisicao_veiculo', 'Valor de Aquisição', ['class' => 'col-md-4 control-label']) !!}
    <div class="input-group col-md-6">
      <span class="input-group-addon">R$</span>
      {!! Form::number('valor_aquisicao_veiculo', null, ['class' => 'form-control']) !!}
      {!! $errors->first('valor_aquisicao_veiculo', '<p class="help-block">:message</p>') !!}
      <span class="input-group-addon">.00</span>
  </div>
</div>

  <div class="form-group {{ $errors->has('valor_atual_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('valor_atual_veiculo', 'Valor Atual', ['class' => 'col-md-4 control-label']) !!}
    <div class="input-group col-md-6">
      <span class="input-group-addon">R$</span>
      {!! Form::number('valor_atual_veiculo', null, ['class' => 'form-control']) !!}
      {!! $errors->first('valor_atual_veiculo', '<p class="help-block">:message</p>') !!}
      <span class="input-group-addon">.00</span>
  </div>
  </div>


  <div class="form-group {{ $errors->has('dsc_veiculo') ? 'has-error' : ''}}">
    {!! Form::label('dsc_veiculo', 'Dsc Veiculo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('dsc_veiculo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dsc_veiculo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
