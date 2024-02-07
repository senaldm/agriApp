<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'user_id',
    ];

    // relationships

    public function product()
    {
        return $this->morphOne(Product::class, 'pricingStructure');
    }
}
