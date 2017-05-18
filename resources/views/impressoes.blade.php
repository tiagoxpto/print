@extends('layouts.app');


@section('content')

    <hr/>

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('id', 'Id:') !!}
        {!! Form::text('id', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'description:') !!}
        {!! Form::text('description', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('updated_at', 'updated_at:') !!}
        {!! Form::text('updated_at', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('created_at', 'created_at:') !!}
        {!! Form::text('created_at', null, ['class' =>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Add printer', ['class' => 'form-control'])!!}

    </div>



    {!! Form::close() !!}












    @stop



