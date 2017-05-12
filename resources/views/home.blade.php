@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    {!! Form::open(['url' => 'foo/bar']) !!}



                    {!! Form::close() !!}


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <li><a href="{{ Route('impressoes') }}">solicitar impressão</a></li>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                registar dados
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                obter relatórios
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
