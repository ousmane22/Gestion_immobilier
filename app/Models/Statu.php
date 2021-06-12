<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function biens()
    {
        return $this->hasMany(Biens::class, 'statu_id');
    }
}