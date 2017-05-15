@extends('layouts.app');

@section('content')

    <hr/>

   {!! Form::open(['route' => 'impressoes.store', 'method' => 'post', 'files' => true]) !!}
    
    <div class="form-group">
        {!! Form::label('description', 'Descrição:') !!}
        {!! Form::text('description', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantity', 'Quantidade:') !!}
        {!! Form::text('quantity', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('paper_size', 'Tamanho do Papel:') !!}
        <label>
            {!! Form::radio('paper_size', '3', null,  ['id' => 'paper_size']) !!}
            A3
        </label>
        <label>
            {!! Form::radio('paper_size', '4', null,  ['id' => 'paper_size']) !!}
            A4
        </label>
    </div>

    <div class="form-group">
        {!! Form::label('paper_type', 'Tipo do papel') !!}
        <label>
            {!! Form::radio('paper_type', '0', null,  ['id' => 'paper_type']) !!}
            Rascunho
        </label>
        <label>
            {!! Form::radio('paper_type', '1', null,  ['id' => 'paper_type']) !!}
            Normal
        </label>
        <label>
            {!! Form::radio('paper_type', '2', null,  ['id' => 'paper_type']) !!}
            Fotográfico
        </label>
    </div>

    <div class="form-group">
        {!! Form::file('file', ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Add printer', ['class' => 'form-control'])!!}
    </div>

    {!! Form::close() !!}

@stop



