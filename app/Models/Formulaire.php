<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function typeformulaire()
    {
        return $this->belongsTo(Typeformulaire::class);
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }


    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }


    public function titreminier()
    {
        return $this->belongsTo(Titreminier::class);
    }

    public function exploitation1()
    {
        return $this->hasMany(Exploitation1::class);
    }

    public function exploitation2()
    {
        return $this->hasMany(Exploitation2::class);
    }
}
