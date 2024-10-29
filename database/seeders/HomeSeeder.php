<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('text_homes')->insert([
            [
                'text_id' => Uuid::uuid4()->toString(),
                'title' => 'Tumbuhkan Potensi, Raih Prestasi',
                'subtitle' => 'Wirausaha Mahasiswa untuk Masa Depan Gemilang!',
                'description' => 'Jadilah bagian dari perubahan! Mulailah wirausaha sekarang dan wujudkan ide-ide kreatifmu. Dengan semangat inovasi dan ketekunan, mari ciptakan masa depan yang lebih cerah dan mandiri. Wirausaha bukan hanya tentang keuntungan, tetapi juga tentang memberi dampak positif bagi masyarakat. Ayo, berani bermimpi, berani bertindak, dan raih sukses bersama!',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
