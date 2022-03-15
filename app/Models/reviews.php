<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $table='reviews';
    protected $fillable = [
        'name',
        'contact',
       'purchaseditem',
        'itemcounter',
        'dateofpurchase',
        'branchlocation',
        'review',
       'ratings',
        'typeofpurchase',
       'resolved',
        'response',
        'isresolved',
        'whatsappreview',
        'company',
        'unlistedcompany'
    ];

    public function companytbs()
    {
        return $this->belongsTo(Companytb::class);
    }
}
