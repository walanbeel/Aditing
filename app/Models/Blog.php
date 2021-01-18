<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = "blogs";
    protected $fillable = ['blog_id ','id','cat_id','title_en','title_ar','content_en','content_ar','main_img','is_active','created_at','updated_at'];
}
