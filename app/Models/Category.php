<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function products(Category $category)
    {
        return $category->hasMany(Product::class);
    }
}
