<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function continent()
    {
        return $this->belongsTo(Continent::class, 'continent_id');
    }

    public function region()
    {
        return $this->HasMany(Region::class, 'pays_id');
    }
}
