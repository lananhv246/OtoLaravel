<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Xe;
use App\Trangbixe;

class Xe_Trangbi extends Model
{
    //
    protected $table = 'xe_trangbis';
    public function xe(){
        return $this->belongsTo(Xe::class, 'id_xes', 'id');
    }
    public function trangbixe(){
        return $this->hasMany(Trangbixe::class);
    }
}
