<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sewa;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sewa::create([
            'tanggal_mulai' => '2021-08-01',
            'tanggal_akhir' => '2021-08-02',
            'tujuan' => 'Bandung',
            'mobil_id' => 1, // Menghubungkan dengan Mobil yang memiliki ID 1
            'nama_customer' => 'Rizky',
            'no_ktp' => '1234567890',
        ]);
        
        Sewa::create([
            'tanggal_mulai' => '2021-08-02',
            'tanggal_akhir' => '2021-08-03',
            'tujuan' => 'Jakarta',
            'mobil_id' => 2, // Menghubungkan dengan Mobil yang memiliki ID 2
            'nama_customer' => 'Hisyam',
            'no_ktp' => '1234567890',
        ]);

        Sewa::create([
            'tanggal_mulai' => '2021-08-03',
            'tanggal_akhir' => '2021-08-04',
            'tujuan' => 'Bogor',
            'mobil_id' => 2, // Menghubungkan dengan Mobil yang memiliki ID 3
            'nama_customer' => 'Faqih',
            'no_ktp' => '1234567890',
        ]);
            
    }
}
