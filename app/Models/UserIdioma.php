<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserIdioma extends Model
{

     protected $fillable = [
        'id',
        'user_id',
        'idioma_id',
    ];

}
