<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = "services";
    protected $fillable = ['s_id','id','cat_id','s_name_en','s_name_ar','sub_services_en','sub_services_ar','ser_images',
    's_describe_en','s_describe_ar','is_active','created_at','updated_at'];

 }
