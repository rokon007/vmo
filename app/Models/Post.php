<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
	protected $guarded = ['created_at', 'updated_at'];

    protected $dates = [
        'published_at',
    ];

   public function blog_category()
    {
         return $this->belongsTo('App\Models\Blog_Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
