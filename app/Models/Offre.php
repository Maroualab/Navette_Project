<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    /** @use HasFactory<\Database\Factories\OffreFactory> */
    use HasFactory;

    protected $fillable = [
        'depart',
        'arrivee',
        'heure_depart',
        'heure_arrivee',
        'date_debut',
        'date_fin',
        'available_places',
        'description',
    ];
}
