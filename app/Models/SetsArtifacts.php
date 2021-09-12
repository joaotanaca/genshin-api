<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SetsArtifacts extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', '2_piece', '4_piece',
    ];

    public function artifact()
    {
        return $this->belongsTo(Artifact::class);
    }
}
