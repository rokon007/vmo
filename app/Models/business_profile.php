<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_profile extends Model
{
    use HasFactory;
    protected $table='business_profiles';
    protected $fillable=[
         
         'email',
         'description',
         'verified',
         'category',
         'tags',
         'status',
         'image',

    ];
}
