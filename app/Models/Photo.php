<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function artiste(){
        return $this->belongsTo(Artiste::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }
}
