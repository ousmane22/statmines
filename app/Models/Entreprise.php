<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{


    use HasFactory;
    protected $guarded = [];

    public function formulaire()
    {
        return $this->hasMany(Formulaire::class);
    }


    public function typemines()
    {
        return $this->belongsTo(Typemines::class,'typemine_id');
    }

    public function typepermis()
    {
        return $this->belongsTo(Typepermis::class,'typepermi_id');
    }

    public function titreminier()
    {
        return $this->hasMany(Titreminier::class);
    }
}
