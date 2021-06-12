<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function departement()
  {
    return $this->hasMany(Departement::class, 'region_id');
  }

  public function pays()
  {
    return $this->belongsTo(Pays::class, 'pays_id');
  }
}
