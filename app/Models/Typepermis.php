<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepermis extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprise');
    }
}
