<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carkid extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'carguest_id',
   			'name',
            'age',
        ];
     
    public function carguest(){
        return $this->belongsTo('App\Carguest');
    }
}
