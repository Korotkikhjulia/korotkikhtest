<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class PublicProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return response()->json($products);
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function index2()
    {
        $categories = ProductCategory::with('childs')->whereNull('parent_id')->paginate(6);
        return response()->json(['data' => $categories]);
    }

    public function categoriesWithProducts()
    {
        $categories = ProductCategory::with('products')->paginate(6);
        return response()->json(['data' => $categories]);
    }
}
