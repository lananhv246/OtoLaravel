@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
                        @include('errors.messeger_erorr')
                        <!-- thong bao loi-->
        {!! Form::model($data, ['route' => ['xe.update', $data->id], 'method' => "PUT", 'files' => true, 'enctype'=>'multipart/form-data' ]) !!}
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, array('class'=>'form-control')) !!}

            {!! Form::label('hangxe', 'Hảng Xe:') !!}
            {!! Form::select('hangxe',$hangxe, null,
                    ['id' => 'hangxe', 'class' => 'form-control', 'placeholder' => 'Please Choose Hangxe']) !!}

            {!! Form::label('loaixe', 'Loại Xe:') !!}
            {!! Form::select('loaixe',$loaixe, null,
                    ['id' => 'loaixe', 'class' => 'form-control', 'placeholder' => 'Please Choose Loaixe']) !!}

            {!! Form::label('alias', 'Alias:') !!}
            {!! Form::text('alias', null, array('class'=>'form-control')) !!}

            {!! Form::label('image', 'Image:') !!}
            {!! Form::file('image', array('class'=>'form-control')) !!}
            {!! Form::hidden('oldImage', $data->image) !!}
            <img src="/images/upload/{!! old('image', isset($data) ? $data['image'] : null) !!}" class="img-responsive">

            {!! Form::label('nguongoc', 'Nguồn Ngốc:') !!}
            {!! Form::text('nguongoc', null, array('class'=>'form-control')) !!}

            {!! Form::label('gia_niem_yet', 'Giá Niêm Yết:') !!}
            {!! Form::text('gia_niem_yet', null, array('class'=>'form-control')) !!}

            {!! Form::label('gia_dam_phan', 'Giá Đàm Phán:') !!}
            {!! Form::text('gia_dam_phan', null, array('class'=>'form-control')) !!}

            {!! Form::label('dongco', 'Động Cơ:') !!}
            {!! Form::text('dongco', null, array('class'=>'form-control')) !!}

            {!! Form::label('congsuat', 'Công Suất:') !!}
            {!! Form::text('congsuat', null, array('class'=>'form-control')) !!}

            {!! Form::submit('submit', array('class'=>'btn btn-submit')) !!}
        {!! Form::close() !!}
        
    </div>
    
</div>
@endsection