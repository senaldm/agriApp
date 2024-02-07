<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $dates = [
        'published_at'

    ];


    protected $fillable = [
        'product_name',
        'price',
        'featured_image',
        'category_name',
        'market_name',
        'user_id',

    ];
}
