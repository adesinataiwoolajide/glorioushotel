<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'room_types';
    protected $fillable = [
        'type_banner', 'type_name', 'max_guest', 'amount', 'description',
    ];
}
