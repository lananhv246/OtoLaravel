@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Id Xe Trang bị</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{!! $data->id !!}</td>
                    <td>{!! $data->tbx_name !!}</td>
                    <td>{!! $data->id_xe_trangbi !!}</td>
                    <td>
                        {!! Form::open(['route'=>['trangbixe.destroy', $data->id], 'method'=>'DELETE']) !!}    
                        {!! Form::submit('Xoa', ['class'=>'btn btn-success']) !!}
                        
                        <button type="button" class="btn btn-primary"><a href='/trangbixe/{!! $data->id !!}/edit'>edit</a></button>
                        
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                <tr>
                    <button type="button" class="btn btn-primary"><a href='/trangbixe/create'>create</a></button>
                </tr>
            </tbody>
        </table>
        
        
        
    </div>
    
</div>
@endsection