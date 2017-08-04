@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>State</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{!! $data->id !!}</td>
                    <td>{!! $data->name !!}</td>
                    <td>{!! $data->alias !!}</td>
                    <td>{!! $data->state !!}</td>
                    <td>{!! $data->image !!}</td>
                    <td>
                        {!! Form::open(['route'=>['hangxe.destroy', $data->id], 'method'=>'DELETE', 'files' => true, 'enctype'=>'multipart/form-data' ]) !!}    
                        {!! Form::submit('Xoa', ['class'=>'btn btn-success']) !!}
                        <button type="button" class="btn btn-primary"><a href='/hangxe/{!! $data->id !!}/edit'>edit</a></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                
                
                @endforeach
                <tr>
                    <button type="button" class="btn btn-primary"><a href='/hangxe/create'>create</a></button>
                </tr>
            </tbody>
        </table>
        
        
        
    </div>
    
</div>
@endsection