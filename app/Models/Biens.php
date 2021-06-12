<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biens extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function commune()
    {
        return $this->belongsTo(Quartier::class,'quartier_id');
    }

    public function typebien()
    {
        return $this->belongsTo(Type::class,'type_id');
    }


       public function biensProp()
    {
        return $this->hasMany(Bienproprietaire::class,'biens_id','bienproprietaire_id');
    }



    public function status()
    {
        return $this->belongsTo(Statu::class,'statu_id','biens_id');
    }


    public function garniture()
    {
        return $this->belongsTo(garniture::class,'garniture_id','biens_id');
    }


     public function iamge()
    {
        return $this->belongToMany(Image::class)
    }


    public function biensProp()
    {
        return $this->hasMany(Bienproprietaire::class)
    }
}
