<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user2 extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable=['id','password','last_login','is_superuser','groups','user_permissions','username','first_name','last_name','email','is_staff','is_active','date_joined','company_name','country','city','block','contact','level'];
}
