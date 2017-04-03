<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attend extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'first_name',
            'last_name',
            'company',
            'guest_first_name',
            'guest_last_name'
        ];


      public function kids(){
        return $this->hasMany('App\Kid');
    }


}
