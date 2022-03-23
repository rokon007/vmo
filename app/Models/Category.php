<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $guarded=[];
     protected $fillable = [
        'category_id',
        'name',
       'subcategory',
        'status'  
    ];

     public function parent()
     {
        return $this->belongsTo(Category::class,'category_id');
     }
}
