<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Natureminier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function titreminier()
    {
        return $this->hasMany(Titreminier::class);
    }
}
