<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typemines extends Model
{

    use HasFactory;

    protected $guarded = [];

    protected $table = 'Typemines';

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprise');
    }
}
