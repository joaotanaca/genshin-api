<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'typeAttack', 'level',
    ];

    public function description()
    {
        return $this->hasMany(DescriptionTalents::class);
    }

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
