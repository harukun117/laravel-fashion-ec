<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Product::class);
    }
    public function carts()
    {
        return $this->belongsToMany(
          Cart::class,
          'line_items',
        )->withPivot(['id', 'quantity', 'size']);
     }
}
