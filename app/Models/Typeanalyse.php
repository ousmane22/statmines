<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeanalyse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function exploitation2()
    {
        return $this->hasMany(Exploitation2::class);
    }
}
