@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">TipoLubrificante {{ $tipolubrificante->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/tipo-lubrificante') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/tipo-lubrificante/' . $tipolubrificante->id . '/edit') }}" title="Edit TipoLubrificante"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/tipolubrificante', $tipolubrificante->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete TipoLubrificante',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tipolubrificante->id }}</td>
                                    </tr>
                                    <tr><th> Tipo Lubrificante </th><td> {{ $tipolubrificante->tipo_lubrificante }} </td></tr><tr><th> Dsc Tipo Lubrificante </th><td> {{ $tipolubrificante->dsc_tipo_lubrificante }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
