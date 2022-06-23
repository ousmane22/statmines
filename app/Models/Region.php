<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function departement()
    {
        return $this->hasMany(Departement::class);

    }



    public function titreminier()
    {
        return $this->hasMany(Titreminier::class);
    }
}
