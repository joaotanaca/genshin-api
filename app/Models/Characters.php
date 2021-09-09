<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'up_atributte', 'weapons', 'artifacts', 'constellation', 'talents'
    ];
}
