@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Hảng Xe</th>
                    <th>Loại Xe</th>
                    <th>Alias</th>
                    <th>Image</th>
                    <th>Nguồn Gốc</th>
                    <th>Giá niêm Yết</th>
                    <th>Giá Đàm Phán</th>
                    <th>Động Cơ</th>
                    <th>Công Suất</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{!! $data->id !!}</td>
                    <td>{!! $data->name !!}</td>
                    <td>{!! $data->id_hangxes !!}</td>
                    <td>{!! $data->id_loaixes !!}</td>
                    <td>{!! $data->alias !!}</td>
                    <td>{!! $data->image !!}</td>
                    <td>{!! $data->nguongoc !!}</td>
                    <td>{!! $data->gia_niem_yet !!}</td>
                    <td>{!! $data->gia_dam_phan !!}</td>
                    <td>{!! $data->dongco !!}</td>
                    <td>{!! $data->congsuat !!}</td>
                    <td>
                        {!! Form::open(['route'=>['xe.destroy', $data->id], 'method'=>'DELETE']) !!}    
                        {!! Form::submit('Xoa', ['class'=>'btn btn-success']) !!}
                        <button type="button" class="btn btn-primary"><a href='/xe/{!! $data->id !!}/edit'>edit</a></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                
                <tr>
                    <button type="button" class="btn btn-primary"><a href='/xe/create'>create</a></button>
                </tr>
            </tbody>
        </table>
        
        
        
    </div>
    
</div>
@endsection