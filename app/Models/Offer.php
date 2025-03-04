<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_city',
        'arrival_city',
        'departure_time',
        'arrival_time',
        'seats_available',
        'description',
        'status',
    ];

    public function subscribers()
    {
        return $this->belongsToMany(User::class, 'offer_user')
                    ->withTimestamps();
    }
}