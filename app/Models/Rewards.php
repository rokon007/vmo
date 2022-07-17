<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewards extends Model
{
    use HasFactory;
    protected $guarded = ['created_at', 'updated_at'];

    protected $dates = [
        'published_at',
    ];
}
