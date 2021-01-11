<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['cat_id','id','cat_name_en','cat_name_ar','is_active','parent'];
// protected $hidden=['user_id'];
    // public $imestamp=false;


}
