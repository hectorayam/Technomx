<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;


class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];
    
    public function products(): BelongsTo{
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function order(): BelongsTo{
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

}
