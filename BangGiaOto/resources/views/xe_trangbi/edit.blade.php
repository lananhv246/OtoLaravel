@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
                        @include('errors.messeger_erorr')
                        <!-- thong bao loi-->
        {!! Form::model($data, ['route' => ['xe_trangbi.update', $data->id], 'method' => "PUT" ]) !!}
            {!! Form::label('xe', 'Xe:') !!}
            {!! Form::select('xe',$xe, null,
                    ['id' => 'xe', 'class' => 'form-control', 'placeholder' => 'Please Choose xe']) !!}

            {!! Form::label('value', 'Value:') !!}
            {!! Form::text('value', null, array('class'=>'form-control')) !!}

            {!! Form::submit('submit', array('class'=>'btn btn-submit')) !!}
        {!! Form::close() !!}
    </div>
    
</div>
@endsection