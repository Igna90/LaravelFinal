<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    protected $table = 'applieds';

    protected $fillable = [
        'user_id', 'offer_id',
    ];
}
