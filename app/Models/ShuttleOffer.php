<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShuttleOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'depart', 'arrivee', 'heure_depart', 
        'heure_arrivee', 'date_debut', 'date_fin', 'available_places', 
        'description', 'equipements', 'is_open'
    ];

    // Récupère le créateur de l'offre (société de transport)
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    // Utilisateurs abonnés à cette offre
    public function subscribers()
    {
        return $this->belongsToMany(User::class, 'offer_user')
            ->using(OfferUser::class)
            ->withTimestamps();
    }

    // Tags associés à cette offre
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'offer_tag')
            ->using(OfferTag::class)
            ->withTimestamps();
    }
}