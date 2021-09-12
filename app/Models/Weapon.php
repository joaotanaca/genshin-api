<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'base_atk',
        'unique_attribute',
        'rarity',
        'level',
    ];

    public function ability()
    {
        return $this->hasMany(AbilityWeapons::class);
    }

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
