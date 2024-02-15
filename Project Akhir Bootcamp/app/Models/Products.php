<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;
use App\Models\OrderItems;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name', 'product_slug', 'category_id', 'product_desc', 'product_status', 'product_price', 'product_weight', 'product_img_url'];
    public $timestamps = true;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'order_item_product', 'product_id');
    }
}
