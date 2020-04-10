<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_title', 'product_brand', 'product_content','product_price', 'product_features', 'product_screen_size','product_processor',
    ];
}
