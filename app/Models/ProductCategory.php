<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id')->with('childs');
    }

    public function products()
{
    return $this->hasMany(Product::class, 'category_id');
}
}
