<?php

namespace Database\Seeders;

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
        //
        $transaction1 = new Transactions();
$transaction1->date_transaction = '2023-09-27';
$transaction1->product_id = 1;
$transaction1->quantity = 3;
$transaction1->id_user = 1;
$transaction1->subtotal_price = 150;
$transaction1->created_at = now();
$transaction1->updated_at = now();
$transaction1->save(); // Simpan objek transaksi pertama ke dalam database
         
        //  DB::table('transactionheaders')->insert($transactions);
      
    }
}
