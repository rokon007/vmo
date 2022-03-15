<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companytb extends Model
{
    use HasFactory;
    protected $table='companytbs';
    protected $fillable = [
        'email',
        'company',
        'country',
        'city',
        'block',
        'contact',
        'category',
        'subcategory'
    ];

    public function reviews1()
    {
        return $this->hasMany(reviews::class);
    }
}
