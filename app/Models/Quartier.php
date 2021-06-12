<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }

    public function biens()
    {
        return $this->hasMany(Biens::class, 'quartier_id');
    }
}
