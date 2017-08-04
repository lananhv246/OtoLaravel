<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hangxe;
use App\Xe;
use App\Http\Requests\HangxeRequest;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Illuminate\Support\Facades\Input;

class HangxeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list hangxe
        $data = Hangxe::orderBy('name', 'ASC')->paginate(10);
        return view('hangxe.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hangxe.create');
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
                'alias'  => 'required',
                'state' => 'required',
                'image' => 'required',
            ],
            [
                'name.required' => 'vui lòng nhập name',
                'alias.required' => 'vui lòng nhập alias',
                'state.required' => 'vui lòng nhập state',
                'image.required' => 'vui lòng nhập image',
            ]);
        $file = $request->file('image');
        $file_image = \Image::make($request->file('image'));
        $path = public_path().'/images/upload/';
        $file_image->resize(300, 200);
        $file_image->save($path.$file->getClientOriginalName());
        $data = new Hangxe;
        $data->name = $request->name;
        $data->alias = $request->alias;
        $data->state = $request->state;
        $data->image = $file->getClientOriginalName();
        $data->save();
        return redirect()->route('hangxe.create', $data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Hangxe::findOrFail($id);
        return view('hangxe.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Hangxe::findOrFail($id);
        return view('hangxe.edit',compact('data'));
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
                'alias'  => 'required',
                'state' => 'required',
                'image' => 'required',
            ],
            [
                'name.required' => 'vui lòng nhập name',
                'alias.required' => 'vui lòng nhập alias',
                'state.required' => 'vui lòng nhập state',
                'image.required' => 'vui lòng nhập image',
            ]);
        $data = Hangxe::find($id);
        $data->name = $request->name;
        $data->alias = $request->alias;
        $data->state = $request->state;
        $oldImage = 'images/upload/'.$request->input('oldImage');
        if(!empty($request->file('image'))){
            $file = $request->file('image');
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
        $data->save();
        return redirect()->route('hangxe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hangxe::findOrFail($id);
        File::delete('images/upload/'.$data["image"]);
        $data->delete();
        return redirect()->route('hangxe.index');
    }
}
