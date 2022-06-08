<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\PriceType;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price_type_id'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function priceTypes()
    {
        return $this->belongsTo(PriceType::class, 'price_type_id');
    }
}
