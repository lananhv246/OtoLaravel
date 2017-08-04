<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Xe_Trangbi;
class Trangbixe extends Model
{
    //
    protected $table = 'trangbixes';
    public function xe_trangbi(){
        return $this->belongsTo(Xe_Trangbi::class, 'id_xe_trangbi', 'id');
    }
}
