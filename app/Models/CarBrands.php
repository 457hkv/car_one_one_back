<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarBrands extends Model
{
    protected $table = 'car_brands';
    protected $primaryKey = 'brand_id';
    protected $fillable = [
        'business_status',
        'image_url',
        'brand_name',
        'brand_english_name',
        'brand_type',
        'brand_country',
        'content_abstract',
        'pinyin',
    ];
}
