<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function quartier()
    {
        return $this->hasMany(Quartier::class, 'departement_id');
    }
}
