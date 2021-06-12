<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function biens()
    {
        return $this->belongToMany(Biens::class)
    }


    public function biensProp()
    {
        return $this->hasMany(Bienproprietaire::class)
    }
}
