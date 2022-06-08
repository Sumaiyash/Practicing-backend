<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Price;

class PriceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function priceType()
    {
        return $this->belongsTo(Price::class);
    }
}
