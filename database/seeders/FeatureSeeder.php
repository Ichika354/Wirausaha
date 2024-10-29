<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            [
                'feature_id' => Uuid::uuid4()->toString(),
                'title' => 'Bursa Penjualan',
                'subtitle' => 'Platform di mana mahasiswa dapat menjual produk dan jasa mereka.',
                'photo' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents(public_path('images/uploads/product1.jpg'))),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
