<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'starting_price',
        'user_id',
    ];

    protected $dates = [
        'ends_at',
    ];

    // relationships

    public function product()
    {
        return $this->morphOne(Product::class, 'pricingStructure');
    }
}
