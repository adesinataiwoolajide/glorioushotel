<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelFacility extends Model
{
    protected $table = 'hotel_facilities';
    protected $fillable = [
        'facility_name', 'facility_category',
    ];
}
