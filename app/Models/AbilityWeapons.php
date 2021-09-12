<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbilityWeapons extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'description',
    ];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }
}
