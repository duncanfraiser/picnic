<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carshow extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'first_name',
            'last_name',
            'email',
            'type',
            'year',
            'make',
            'model',

        ];
}
