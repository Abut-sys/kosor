<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'sku',
        'name',
        'description',
        'category',
        'price',
        'cost_price',
        'stock',
        'discount_percent',
    ];

    /**
     * Price after discount (computed).
     */
    public function getPriceAfterDiscountAttribute(): float
    {
        $percent = $this->discount_percent ?? 0;
        $percent = (float) $percent;

        if ($percent <= 0) {
            return (float) $this->price;
        }

        $discounted = (float) $this->price - ((float) $this->price * $percent / 100);

        return round($discounted, 2);
    }

    /**
     * Whether product has a discount > 0.
     */
    public function hasDiscount(): bool
    {
        $percent = $this->discount_percent ?? 0;
        return ((float) $percent) > 0;
    }
}
