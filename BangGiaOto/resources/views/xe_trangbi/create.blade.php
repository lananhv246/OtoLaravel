@extends('layouts.master')
@section('content')
<div class="container">
                        @include('errors.messeger_erorr')
                        <!-- thong bao loi-->
        {!! Form::open(['route' => 'xe_trangbi.create','enctype'=>"multipart/form-data"]) !!}

            {!! Form::label('xe', 'Xe:') !!}
            {!! Form::select('id_xes',$xe, null,
                    ['id' => 'id_xes', 'class' => 'form-control', 'placeholder' => 'Please Choose xe']) !!}

            {!! Form::label('value', 'Value:') !!}
            {!! Form::text('value', null, array('class'=>'form-control')) !!}

            {!! Form::submit('submit', array('class'=>'btn btn-submit')) !!}
        {!! Form::close() !!}
    </div>
    
</div>
@endsection