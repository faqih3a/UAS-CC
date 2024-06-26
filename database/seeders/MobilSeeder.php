<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tambah data dummy
        Mobil::create([
            'nama' => 'Raize',
            'no_polisi' => 'B 1345 EBC',
            'warna' => 'Hijau',
            'cc' => 1198,
            'harga_sewa' => 600000,
            'merk_id' => 1,
            'gambar' => 'https://images.autofun.co.id/file1/afc8f52af04e4294beec502aa207fc55_606x402.jpg'
        ]);

        Mobil::create([
            'nama' => 'Veloz',
            'no_polisi' => 'B 1234 ABC',
            'warna' => 'Putih',
            'cc' => 1496,
            'harga_sewa' => 800000,
            'merk_id' => 1,
            'gambar' => 'https://images.autofun.co.id/file1/ce3ad76c58aa41a4b3b37db9e34a7e1a_606x402.jpg'
        ]);

        Mobil::create([
            'nama' => 'Rush',
            'no_polisi' => 'B 5634 ENC',
            'warna' => 'Abu-Abu',
            'cc' => 1496,
            'harga_sewa' => 700000,
            'merk_id' => 1,
            'gambar' => 'https://images.autofun.co.id/file1/3c311b3a2bdd4a1892137b535dc2ffad_606x402.jpg'
        ]);

        Mobil::create([
            'nama' => 'Brio',
            'no_polisi' => 'B 5698 ENC',
            'warna' => 'kuning',
            'cc' => 1200,
            'harga_sewa' => 1000000,
            'merk_id' => 2,
            'gambar' => 'https://mobil-pedia.com/images/mobil/202306/2e134fc2be.webp'
        ]);

        Mobil::create([
            'nama' => 'Civic',
            'no_polisi' => 'B 5648 EBN',
            'warna' => 'Merah',
            'cc' => 2000,
            'harga_sewa' => 1200000,
            'merk_id' => 2,
            'gambar' => 'https://mobil-pedia.com/images/mobil/202109/honda-civic-fb9d5ff7ea.jpg'
        ]);

        Mobil::create([
            'nama' => 'Odyssey',
            'no_polisi' => 'B 5698 ENC',
            'warna' => 'Putih',
            'cc' => 2356,
            'harga_sewa' => 1400000,
            'merk_id' => 2,
            'gambar' => 'https://mobil-pedia.com/images/mobil/202108/honda-odyssey-265ft28u.webp'
        ]);

    }
}
