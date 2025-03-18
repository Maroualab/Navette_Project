<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OfferTag extends Pivot
{
    protected $table = 'offer_tag';

    protected $fillable = ['tag_id', 'shuttle_offer_id'];
}