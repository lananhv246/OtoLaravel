@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Id Xe</th>
                    <th>Values</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{!! $data->id !!}</td>
                    <td>{!! $data->id_xes !!}</td>
                    <td>{!! $data->value !!}</td>
                    <td>
                        {!! Form::open(['route'=>['xe_trangbi.destroy', $data->id], 'method'=>'DELETE']) !!}    
                        {!! Form::submit('Xoa', ['class'=>'btn btn-success']) !!}
                        <button type="button" class="btn btn-primary"><a href='/xe_trangbi/{!! $data->id !!}/edit'>edit</a></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                <tr>
                    <button type="button" class="btn btn-primary"><a href='/xe_trangbi/create'>create</a></button>
                </tr>
            </tbody>
        </table>
        
        
        
    </div>
    
</div>
@endsection