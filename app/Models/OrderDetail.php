<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'subtotal'];

    // Relasi ke tabel Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi ke tabel Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
