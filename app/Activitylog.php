<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitylog extends Model
{
    protected $table = 'activities';
    protected $fillable = [
        'action', 'user_details',
    ];
}
