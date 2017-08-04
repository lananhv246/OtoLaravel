<?php

namespace App;
use App\Xe;

use Illuminate\Database\Eloquent\Model;

class Hangxe extends Model
{
    //
    protected $table = 'hangxes';
    public function xe(){
        return $this->hasMany(Xe::class);
    }
}
