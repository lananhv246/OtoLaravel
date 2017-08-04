<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hangxe;
use App\Loaixe;
use App\Xe_Trangbi;
class Xe extends Model
{
    //
    protected $table = 'xes';
    public function hangxe(){
        return $this->belongsTo(Hangxe::class,'id_hangxes', 'id');
    }
    public function loaixe(){
        return $this->belongsTo(Loaixe::class, 'id_loaixes', 'id');
    }
    public function xe_trangbi(){
        return $this->hasMany(Xe_Trangbi::class);
    }


}
