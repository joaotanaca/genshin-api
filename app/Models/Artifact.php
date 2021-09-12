<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artifact extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'attribute_focuses'
    ];

    public function sets()
    {
        return $this->hasMany(SetsArtifacts::class);
    }

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
