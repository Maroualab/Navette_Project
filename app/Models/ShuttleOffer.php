<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShuttleOffer extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'depart',
        'arrivee',
        'heure_depart',
        'heure_arrivee',
        'date_debut',
        'date_fin',
        'available_places',
        'description',
        'equipements'
    ];

    // Cast JSON field to array
    protected $casts = [
        'equipements' => 'array'
    ];
}
