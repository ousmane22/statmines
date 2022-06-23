<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typecartographie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function formulaire()
    {
        return $this->hasMany(Exploitation1::class);
    }
}
