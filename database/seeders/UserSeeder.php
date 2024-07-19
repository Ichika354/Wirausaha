<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_id' => Uuid::uuid4()->toString(),
                'fullname' => 'Ghaida Fasya',
                'npm' => 714220031,
                'phone_number' => '081908915320',
                'role' => 'Admin',
                'email' => 'ghaida@gmail.com',
                'password' => Hash::make('admin12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => Uuid::uuid4()->toString(),
                'fullname' => 'M Fachriza Farhan',
                'npm' => 714220005,
                'phone_number' => '0895379114998',
                'role' => 'Admin',
                'email' => 'reza@gmail.com',
                'password' => Hash::make('admin12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => Uuid::uuid4()->toString(),
                'fullname' => 'Rania Ayuni Kartini Fitri',
                'npm' => 714220032,
                'phone_number' => '089832458212',
                'role' => 'seller',
                'email' => 'rania@gmail.com',
                'password' => Hash::make('admin12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
