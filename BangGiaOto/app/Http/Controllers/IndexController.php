<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xe;
use App\Hangxe;
use App\Loaixe;

class IndexController extends Controller
{
    public function index(){
        $hangxe = Hangxe::pluck('name', 'id')->toArray();
        $loaixe = Loaixe::pluck('name', 'id')->toArray();
        $data = Xe::orderBy('id', 'DESC')->paginate(10);
        
        return view('index', compact('hangxe','loaixe','data'));
    }
    public function findHang(Request $request) {
        if($request->ajax()){
            $xe = Xe::where('id_hangxes', $request->id_hangxe)->get()->toArray();
            return response()->json($xe);
        }
    }
    public function findLoai(Request $request) {
        if($request->ajax()){
            $xe = Xe::where('id_loaixes', $request->id_loaixe)->get()->toArray();
            return response()->json($xe);
        }
    }
}
