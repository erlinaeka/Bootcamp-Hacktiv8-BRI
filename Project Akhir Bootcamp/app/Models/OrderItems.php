<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Products;
use App\Models\User;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $primaryKey = 'order_item_id';
    protected $fillable = ['order_item_product', 'order_item_qty', 'order_item_subtotal', 'order_item_user'];
    public $timestamps = true;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Products::class, 'order_item_product', 'product_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'order_item_user', 'id');
    }
}
