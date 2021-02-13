<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adduser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Võ Minh Trí', 'email' => 'minhtrithcb@gmail.com', 'password' => Hash::make('admin'), 'role' => 1],
            ['name' => 'Lê Hoàng Hải', 'email' => 'hoanghai@gmail.com', 'password' => Hash::make('admin'), 'role' => 1],
            ['name' => 'Nguyễn văn A', 'email' => 'khach@gmail.com', 'password' => Hash::make('admin'), 'role' => 0],
        ]);
    }
}
