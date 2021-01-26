<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experienc extends Model
{
    //
    protected $table = "experiences";
    protected $fillable = ['exp_id ','id','name_en','name_ar','logo',
                         'url','is_active','created_at','updated_at'];
}
