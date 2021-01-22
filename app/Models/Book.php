<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $fillable = ['B_id','id','cat_id','authoer_name_en','authoer_name_ar',
                           'B_name_en','B_name_ar','file','B_preface_en',
                           'B_preface_ar','is_active'];

}
