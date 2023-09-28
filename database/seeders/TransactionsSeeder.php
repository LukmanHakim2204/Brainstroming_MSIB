<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transactions;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // ID produk yang akan digunakan
    $productIds = [1, 2, 3, 4, 5];

    // Looping untuk membuat transaksi dengan harga produk yang berbeda
    foreach ($productIds as $productId) {
        // Mengambil harga produk dengan ID tertentu
        $product = Products::find($productId);

        if ($product) {
            $productPrice = $product->price; // Ini adalah harga produk

            // Membuat objek transaksi
            $transaction = new Transactions();
            $transaction->date_transaction = '2023-09-27';
            $transaction->seller_id = 1;
            $transaction->product_id = $productId; // Gunakan ID produk yang sesuai
            $transaction->quantity = rand(1,5);
            $transaction->id_user = 1;

            // Menghitung subtotal harga dan menyimpannya dalam transaksi
            $transaction->subtotal_price = $productPrice * $transaction->quantity;

            $transaction->created_at = now();
            $transaction->updated_at = now();
            $transaction->save(); // Simpan objek transaksi ke dalam database
        } else {
            $this->command->info('Product with ID ' . $productId . ' not found.');
        }
    }
}

}