<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'duration_days', 'start_date', 'end_date', 'image_url'
    ];
}
