<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::factory()->count(5)->create();

        ProductCategory::factory()->count(10)->create([
            'parent_id' => fn() => ProductCategory::inRandomOrder()->first()->id,
        ]);
    }
}
