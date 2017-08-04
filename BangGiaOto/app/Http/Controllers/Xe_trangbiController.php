<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xe_Trangbi;
use App\Xe;

class Xe_trangbiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Xe_Trangbi::orderBy('id', 'ESC')->paginate(10);
        return view('xe_trangbi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $xe = Xe::pluck('name', 'id')->toArray();
        return view('xe_trangbi.create',compact('xe'));
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
                'id_xes' => 'required',
                'value'  => 'required',
            ],
            [
                'id_xes.required' => 'vui lòng nhập id_xes',
                'value.required' => 'vui lòng nhập value',
            ]);
        $data = new Xe_Trangbi;
        $data->id_xes = $request->id_xes;
        $data->value = $request->value;
        $data->save();
        return redirect()->route('xe_trangbi.index');
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
        $data = Xe_Trangbi::findOrFail($id);
        $xe = Xe::pluck('name', 'id');
        return view('xe_trangbi.edit', compact('xe', 'data'));
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
                'id_xes' => 'required',
                'value'  => 'required',
            ],
            [
                'id_xes.required' => 'vui lòng nhập id_xes',
                'value.required' => 'vui lòng nhập value',
            ]);
        $data = Xe_Trangbi::findOrFail($id);
        $data->id_xes = $request->xe;
        $data->value = $request->value;
        $data->save();
        return redirect()->route('xe_trangbi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Xe_Trangbi::findOrFail($id);
        $data->delete();
        return redirect()->route('xe_trangbi.index');
    }
}
