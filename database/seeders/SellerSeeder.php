<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;


class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        
        $seller = new Seller();
        $seller->username = 'Rizky Alamsyah';
        $seller->email = 'ky@gmail.com';
        $seller->save();
    }
}
