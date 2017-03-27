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
            'guest_last_name',
            'child_one',
            'child_one_age',
            'child_two',
            'child_two_age',
            'child_three',
            'child_three_age',
            'child_four',
            'child_four_age',
            'child_five',
            'child_five_age',
        ];
}
