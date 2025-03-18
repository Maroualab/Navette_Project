<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OfferUser extends Pivot
{
    protected $table = 'offer_user';

    protected $fillable = ['user_id', 'shuttle_offer_id'];
}