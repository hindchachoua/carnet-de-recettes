<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recette extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_de_plat',
        'contenu',
        'image',
    ];
}
