@extends('master')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->

            {!! Form::open(['url'=>'mypages', 'class'=>'form-horizontal']) !!}
                
                @include('mypages.form',['buttonText'=>'Dodaj stronę'])

            {!! Form::close() !!}


                
            </div>
        </div>
    </div>
</div>

@stop