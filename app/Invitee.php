<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitee extends Model
{
      use SoftDeletes;
      protected $fillable = [
   			'invitee_email',
            'employee_email'

        ];
}
