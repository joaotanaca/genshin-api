<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constellation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'level',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
