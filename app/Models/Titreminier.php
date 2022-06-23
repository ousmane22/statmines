<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titreminier extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function substance()
    {
        return $this->belongsToMany(Substance::class);
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }



    public function region()
    {
        return $this->belongsTo(Region::class);
    }




    public function natureminier()
    {
        return $this->belongsTo(Natureminier::class);
    }

    public function formulaire()
    {
        return $this->hasMany(Formulaire::class);
    }
}
