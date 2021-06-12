<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bienproprietaire extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function biens()
    {
        return $this->belongsTo(Biens::class, 'biens_id');
    }
}
