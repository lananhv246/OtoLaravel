<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Xe;

class Loaixe extends Model
{
    //
    protected $table = 'loaixes';
    public function xe(){
        return $this->hasMany(Xe::class);
    }
}
