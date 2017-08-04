@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <span>Hãng Xe</span>
                        
                        {!! Form::open(['url' => '/', 'method' => 'POST']) !!}
                            {!! Form::select('hangxe', $hangxe, null, ['class'=>'form-controll', 'id'=>'hangxe']) !!}
                        {!! Form::close() !!}
                        
                        
                    </th>
                    <th>
                        <span>Loại Xe</span>
                        
                        {!! Form::open(['url' => '/', 'method' => 'POST']) !!}
                            {!! Form::select('loaixe', $loaixe, null, ['class'=>'form-controll', 'id'=>'loaixe']) !!}
                        {!! Form::close() !!}
                        
                    </th>
                    <th><span>Name</span></th>
                    <th><span>Image</span></th>
                    <th><span>Alias</span></th>
                    <th><span>Nguồn Góc</span></th>
                    <th><span>Giá Niêm Yết</span></th>
                    <th><span>Giá Đàm Phán</span></th>
                    <th><span>Động Cơ</span></th>
                    <th><span>Công Suất</span></th>
                </tr>
            <thead>
            <tbody id="xe">
             @foreach($data as $data)
                <tr>
                <?php
                    $hang = DB::table('hangxes')->where('id', $data->id_hangxes)->first();
                ?>
                    <td>{!! $hang->name !!}</td>
                <?php
                    $loai = DB::table('loaixes')->where('id', $data->id_loaixes)->first();
                ?>
                    <td>{!! $loai->name !!}</td>
                    <td>{!! $data->name !!}</td>
                    <td><img src="/images/upload/{!! $data->image !!}" class="img-responsive"></td>
                    <td>{!! $data->alias !!}</td>
                    <td>{!! $data->nguongoc !!}</td>
                    <td>{!! $data->gia_niem_yet !!}</td>
                    <td>{!! $data->gia_dam_phan !!}</td>
                    <td>{!! $data->dongco !!}</td>
                    <td>{!! $data->congsuat !!}</td>
                </tr>
            @endforeach 
            </tbody>
            {{--  <tbody  id="xe">
            </tbody>  --}}
        </table>
    </div>
@endsection