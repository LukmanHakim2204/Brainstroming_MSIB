<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = new Users();
        $users->username = 'Lukman Hakim';
        $users->address = 'Cirebon';
        $users->phone = '082356897845';
        $users->save();
    }
}
