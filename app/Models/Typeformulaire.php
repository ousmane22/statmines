<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeformulaire extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function formulaire()
    {
        return $this->hasMany(Formulaire::class,'typeformulaire_id');
    }
}
