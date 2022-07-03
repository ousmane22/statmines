<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typesondage extends Model
{
    use HasFactory;

    protected $guaerded =[];

    public function exploitation1()
    {
        return $this->hasMany(Exploitation1::class);
    }
}
