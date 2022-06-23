<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitreminierSubstance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function titreminier()
    {
        return $this->belongsToMany(Titreminier::class);
    }
}
