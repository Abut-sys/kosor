<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some fixed sample products
        $samples = [
            ['sku' => 'PRD-001', 'name' => 'Kopi Tubruk', 'description' => 'Kopi hitam lokal', 'category' => 'Drink', 'price' => 15000, 'cost_price' => 8000, 'stock' => 50, 'discount_percent' => 0],
            ['sku' => 'PRD-002', 'name' => 'Roti Tawar', 'description' => 'Roti tawar premium', 'category' => 'Food', 'price' => 12000, 'cost_price' => 6000, 'stock' => 30, 'discount_percent' => 10],
            ['sku' => 'PRD-003', 'name' => 'Baterai AA', 'description' => 'Baterai alkaline', 'category' => 'Electronics', 'price' => 20000, 'cost_price' => 9000, 'stock' => 100, 'discount_percent' => 5],
            ['sku' => 'PRD-004', 'name' => 'Air Mineral 600ml', 'description' => 'Air minum kemasan', 'category' => 'Drink', 'price' => 7000, 'cost_price' => 3000, 'stock' => 200, 'discount_percent' => 0],
            ['sku' => 'PRD-005', 'name' => 'Coklat Batang', 'description' => 'Coklat susu', 'category' => 'Food', 'price' => 18000, 'cost_price' => 9000, 'stock' => 40, 'discount_percent' => 15],
        ];

        foreach ($samples as $s) {
            Product::updateOrCreate(['sku' => $s['sku']], $s);
        }

        // Create additional random products via factory
        Product::factory()->count(20)->create();
    }
}
