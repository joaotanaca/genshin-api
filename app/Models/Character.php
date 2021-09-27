<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use UsesUuid;


    protected $fillable = [
        'name',
        'up_atributte',
        'element',
        'weapon_type',
        'constellation',
        'artifact',
        'talent',
        'weapon',
    ];
}
