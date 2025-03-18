<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Offres associées à ce tag
    public function shuttleOffers()
    {
        return $this->belongsToMany(ShuttleOffer::class, 'offer_tag')
            ->using(OfferTag::class)
            ->withTimestamps();
    }
}