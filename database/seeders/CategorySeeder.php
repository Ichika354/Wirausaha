<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_id' => Uuid::uuid4()->toString(),
                'category' => 'Fashion Pria',
                'icon' => 'fa-solid fa-shirt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => Uuid::uuid4()->toString(),
                'category' => 'Fashion Wanita',
                'icon' => 'fa-solid fa-shirt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => Uuid::uuid4()->toString(),
                'category' => 'Makanan Cepat Saji',
                'icon' => 'fa-solid fa-bowl',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => Uuid::uuid4()->toString(),
                'category' => 'Minuman',
                'icon' => 'fa-solid fa-glasess',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
