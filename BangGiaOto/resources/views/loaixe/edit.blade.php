@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
                        @include('errors.messeger_erorr')
                        <!-- thong bao loi-->
        {!! Form::model($data, ['route' => ['loaixe.update', $data->id], 'method' => "PUT" ]) !!}
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, array('class'=>'form-control')) !!}
            {!! Form::label('alias', 'Alias:') !!}
            {!! Form::text('alias', null, array('class'=>'form-control')) !!}
            {!! Form::label('state', 'State:') !!}
            {!! Form::text('state', null, array('class'=>'form-control')) !!}
            {!! Form::submit('submit', array('class'=>'btn btn-submit')) !!}
            
        {!! Form::close() !!}
    </div>
    
</div>
@endsection