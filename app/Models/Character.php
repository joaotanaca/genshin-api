<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use UsesUuid;

    public $timestamps = false;

    protected $hidden = ['increments'];

    protected $fillable = [
        'name',
        'up_atributte',
        'element',
        'weapon_type',
        // 'constellation' => 'json'
    ];

    // public function weapons()
    // {
    //     return $this->hasMany(Weapon::class);
    // }

    // public function artifacts()
    // {
    //     return $this->hasOne(Artifact::class);
    // }

    // public function talents()
    // {
    //     return $this->hasMany(Talent::class);
    // }
}
