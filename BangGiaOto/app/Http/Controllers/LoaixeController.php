<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaixe;

class LoaixeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Loaixe::orderBy('name', 'ESC')->paginate(10);
        return view('loaixe.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loaixe.create');
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
            ],
            [
                'name.required' => 'vui lòng nhập name',
                'alias.required' => 'vui lòng nhập alias',
                'state.required' => 'vui lòng nhập state',
            ]);
        $data = new Loaixe;
        $data->name = $request->name;
        $data->alias = $request->alias;
        $data->state = $request->state;
        $data->save();
        return redirect()->route('loaixe.create');
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
        $data = Loaixe::findOrFail($id);
        return view('loaixe.edit', compact('data'));
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
            ],
            [
                'name.required' => 'vui lòng nhập name',
                'alias.required' => 'vui lòng nhập alias',
                'state.required' => 'vui lòng nhập state',
            ]);
        $data = Loaixe::find($id);
        $data->name = $request->name;
        $data->alias = $request->alias;
        $data->state = $request->state;
        $data->save();
        return redirect()->route('loaixe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Loaixe::findOrFail($id);
        $data->delete();
        return redirect()->route('loaixe.index');
    }
}
