<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trangbixe;
use App\Xe_Trangbi;

class TrangbixeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Trangbixe::orderBy('id', 'ESC')->paginate(10);
        return view('trangbixe.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $xe_trangbi = Xe_Trangbi::pluck('id_xes', 'id');
        return view('trangbixe.create', compact('xe_trangbi'));
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
                'id_xe_trangbi' => 'required',
                'tbx_name'  => 'required',
            ],
            [
                'id_xe_trangbi.required' => 'vui lòng nhập id_xe_trangbi',
                'tbx_name.required' => 'vui lòng nhập tbx_name',
            ]);
        $data = new Trangbixe;
        $data->id_xe_trangbi = $request->id_xe_trangbi;
        $data->tbx_name = $request->tbx_name;
        $data->save();
        return redirect()->route('trangbixe.index');
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
        $xe_trangbi = Xe_Trangbi::pluck('id_xes','id');
        $data = Trangbixe::findOrFail($id);
        return view('trangbixe.edit',compact('xe_trangbi', 'data'));
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
                'id_xe_trangbi' => 'required',
                'tbx_name'  => 'required',
            ],
            [
                'id_xe_trangbi.required' => 'vui lòng nhập id_xe_trangbi',
                'tbx_name.required' => 'vui lòng nhập tbx_name',
            ]);
        $data = Trangbixe::findOrFail($id);
        $data->id_xe_trangbi = $request->xe_trangbi;
        $data->tbx_name = $request->tbx_name;
        $data->save();
        return redirect()->route('trangbixe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Trangbixe::findOrFail($id);
        $data->delete();
        return redirect()->route('trangbixe.index');
    }
}
