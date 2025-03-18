<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

     // Relation avec les offres créées par la société de transport
     public function shuttleOffers()
     {
         return $this->hasMany(ShuttleOffer::class);
     }
 
     // Relation avec les offres auxquelles l'utilisateur est abonné
     public function subscribedOffers()
     {
         return $this->belongsToMany(ShuttleOffer::class, 'offer_user')
             ->using(OfferUser::class)
             ->withTimestamps();
     }
   
}