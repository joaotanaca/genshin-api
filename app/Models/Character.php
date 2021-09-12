<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'up_atributte',
        'element',
        'weapon_type',
    ];

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }

    public function artifacts()
    {
        return $this->hasOne(Artifact::class);
    }

    public function constellation()
    {
        return $this->hasMany(Constellation::class);
    }

    public function talents()
    {
        return $this->hasMany(Talent::class);
    }
}
