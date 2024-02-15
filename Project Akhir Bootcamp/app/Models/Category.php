<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Products;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name'];
    public $timestamps = true;

    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'product_id');
    }
}
