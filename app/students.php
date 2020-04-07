<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    //
    protected $fillable = [
      'id',  'name', 'last_name_p','last_name_m', 'ci', 'date_birth','user', 'password','levels_id', 'genders_id'
    ];


}
