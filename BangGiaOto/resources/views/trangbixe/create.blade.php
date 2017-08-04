@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
                        @include('errors.messeger_erorr')
                        <!-- thong bao loi-->
        {!! Form::open(['route' => 'trangbixe.create']) !!}
            {!! Form::label('tbx_name', 'Name:') !!}
            {!! Form::text('tbx_name', null, array('class'=>'form-control')) !!}

            {!! Form::label('id_xe_trangbi', 'Xe Trang Bị:') !!}
            {!! Form::select('id_xe_trangbi',$xe_trangbi, null,
                    ['id' => 'id_xe_trangbi', 'class' => 'form-control', 'placeholder' => 'Please Choose Hangxe']) !!}

            {!! Form::submit('submit', array('class'=>'btn btn-submit')) !!}
        {!! Form::close() !!}
    </div>
    
</div>
@endsection