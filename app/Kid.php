<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kid extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'attend_id',
   			'name',
            'age',
        ];
     
    public function attend(){
        return $this->belongsTo('App\Attend');
    }

}
