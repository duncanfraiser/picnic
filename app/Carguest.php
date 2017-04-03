<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carguest extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			    'first_name',
            'last_name',
            'email',
            'guest_first_name',
            'guest_last_name',
            'type',
            'year',
            'make',
            'model',
        ];


      public function Carkids(){
        return $this->hasMany('App\Carkid');
    }
}
