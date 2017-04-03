@extends('layouts.admin')
@section('header')
    Edit Package
@endsection
@section('content')

    {!! Form::model($package,['method'=>'PATCH','action'=>["AdminPackegeController@update",$package->id]]) !!}

    <div class="col-sm-4 col-12">

        @include('includes.form_errors')

        <div class="form-group">
            {!! Form::label('Name','Package Name: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::text('name',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('amount','Amount: ',['style'=>'margin-right : 20px']) !!}
            {!! Form::number('amount',null,['class'=>'form-control col-2']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('time','Time (day): ',['class'=>'Col']) !!}
            {!! Form::number('time',null,['class'=>'form-control col-2','required' ]) !!}

        </div>



        <div class="form-group  col-sm-6">
            {!! Form::submit('Create Package',['class'=>'btn btn-primary   col-sm-11']) !!}
        </div>



        {!! Form::Close() !!}
        {!! Form::open(['method'=>'Delete','action'=>["AdminPackegeController@destroy",$package->id]]) !!}


        <div class="form-group  col-sm-6" style="padding: 0">
            {!! Form::submit('Delete Package',['class'=>'btn btn-danger col-sm-12']) !!}
        </div>
        {!! Form::Close() !!}


    </div>
@endsection