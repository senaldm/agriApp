<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $dates = [
        'published_at'

    ];


    protected $fillable = [
        'title',
        'price',
        'contact_no',
        'featured_image',
        'category_id',
        'description',
        'pricing_structure_type',
        'pricing_structure_id',
        'quantity_in_hand',
        'user_id',
        'published_at',



    ];



    // relationships

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pricingStructure()
    {
        return $this->morphTo();
    }

    // scopes

    public function scopePublished(Builder $query)
    {

        return $query->whereNotNull('published_at');

    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // accessors

    public function getPricingStructureLabelAttribute()
    {
        if ($this->pricing_structure_type == Bid::class) {
            return 'BID';
        }

        if ($this->pricing_structure_type == Offer::class) {
            return 'SPECIAL OFFER';
        }

        if ($this->pricing_structure_type == Deal::class) {
            return 'SPECIAL DEAL';
        }
    }
}
