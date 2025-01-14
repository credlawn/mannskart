<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'type', 'description', 'key_features', 'user_id', 'company_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    // getMyProducts
    public static function getMyProducts()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();

        return $products;
    }
}
