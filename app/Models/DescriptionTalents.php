<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DescriptionTalents extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'description',
    ];

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }
}
