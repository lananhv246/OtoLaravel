<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xe;
use App\Loaixe;
use App\Hangxe;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Illuminate\Support\Facades\Input;

class XeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Xe::orderBy('name', 'ASC')->paginate(10);
        return view('xe.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hangxe = Hangxe::pluck('name', 'id')->toArray();
        $loaixe = Loaixe::pluck('name', 'id')->toArray();
        return view('xe.create',compact('hangxe', 'loaixe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'hangxe'  => 'required',
                'loaixe' => 'required',
                'alias' => 'required',
                'image'  => 'required',
                'nguongoc' => 'required',
                'gia_niem_yet' => 'required',
                'gia_dam_phan'  => 'required',
                'dongco' => 'required',
                'congsuat' => 'required',
            ],
            [
                'name.required' => 'vui lòng nhập name',
                'hangxe.required' => 'vui lòng nhập hangxe',
                'loaixe.required' => 'vui lòng nhập loaixe',
                'alias.required' => 'vui lòng nhập alias',
                'image.required' => 'vui lòng nhập image',
                'nguongoc.required' => 'vui lòng nhập nguongoc',
                'gia_niem_yet.required' => 'vui lòng nhập gia_niem_yet',
                'gia_dam_phan.required' => 'vui lòng nhập gia_dam_phan',
                'dongco.required' => 'vui lòng nhập dongco',
                'congsuat.required' => 'vui lòng nhập congsuat',
            ]);
        $file = $request->file('image');
        $file_image = \Image::make($request->file('image'));
        $path = public_path().'/images/upload/';
        $file_image->resize(300, 200);
        $file_image->save($path.$file->getClientOriginalName());
        $data = new Xe;
        $data->name = $request->name;
        $data->id_hangxes = $request->hangxe;
        $data->id_loaixes = $request->loaixe;
        $data->alias = $request->alias;
        $data->image = $file->getClientOriginalName();
        $data->nguongoc = $request->nguongoc;
        $data->gia_niem_yet = $request->gia_niem_yet;
        $data->gia_dam_phan = $request->gia_dam_phan;
        $data->dongco = $request->dongco;
        $data->congsuat = $request->congsuat;
        $data->save();
        return redirect()->route('xe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hangxe = Hangxe::pluck('name', 'id')->toArray();
        $loaixe = Loaixe::pluck('name', 'id')->toArray();
        $data = Xe::findOrFail($id);

        return view('xe.edit',compact('data','hangxe', 'loaixe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'hangxe'  => 'required',
                'loaixe' => 'required',
                'alias' => 'required',
                'image'  => 'required',
                'nguongoc' => 'required',
                'gia_niem_yet' => 'required',
                'gia_dam_phan'  => 'required',
                'dongco' => 'required',
                'congsuat' => 'required',
            ],
            [
                'name.required' => 'vui lòng nhập name',
                'hangxe.required' => 'vui lòng nhập hangxe',
                'loaixe.required' => 'vui lòng nhập loaixe',
                'alias.required' => 'vui lòng nhập alias',
                'image.required' => 'vui lòng nhập image',
                'nguongoc.required' => 'vui lòng nhập nguongoc',
                'gia_niem_yet.required' => 'vui lòng nhập gia_niem_yet',
                'gia_dam_phan.required' => 'vui lòng nhập gia_dam_phan',
                'dongco.required' => 'vui lòng nhập dongco',
                'congsuat.required' => 'vui lòng nhập congsuat',
            ]);
        $data = Xe::find($id);
        $data->name = $request->name;
        $data->id_hangxes = $request->hangxe;
        $data->id_loaixes = $request->loaixe;
        $data->alias = $request->alias;
        $oldImage = 'images/upload/'.$request->input('oldImage');
        if(!empty($request->file('image'))){
            $file = $request->file('image');
            //$file_name = $request->file('fImage')->getClientOriginalName();
            $file_image = \Image::make($request->file('image'));
            $path = public_path().'/images/upload/';
            $file_image->resize(300, 200);
            $file_image->save($path.$file->getClientOriginalName());
            $data->image=$file->getClientOriginalName();
            if(File::exists($oldImage)){
                File::delete($oldImage);
            }
        }
        else{
            echo "Không có file";
        }
        $data->nguongoc = $request->nguongoc;
        $data->gia_niem_yet = $request->gia_niem_yet;
        $data->gia_dam_phan = $request->gia_dam_phan;
        $data->dongco = $request->dongco;
        $data->congsuat = $request->congsuat;
        $data->save();
        return redirect()->route('xe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Xe::finOrFail($id);
        $data->delete();
    }
}
