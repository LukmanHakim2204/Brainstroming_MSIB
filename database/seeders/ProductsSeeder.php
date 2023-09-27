<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         //
         $numberOfProducts = 10;

         for ($i = 1; $i <= $numberOfProducts; $i++) {
             $product = new Products();
             $product->product_name = 'Product ' . $i;
             $product->price = rand(10000, 50000);
             $product->stock = rand(1, 50);
             $product->save();
    }
}
}