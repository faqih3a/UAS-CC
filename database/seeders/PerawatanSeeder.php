<?php

namespace Database\Seeders;

use App\Models\Perawatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tambah data dummy
        Perawatan::create([
            'tanggal' => '2021-08-01',
            'km_mobil' => '1000',
            'biaya' => '100000',
            'mobil_id' => 1,
            'jenis_perawatan_id' => 1,
        ]);

        Perawatan::create([
            'tanggal' => '2021-08-02',
            'km_mobil' => '2000',
            'biaya' => '200000',
            'mobil_id' => 2,
            'jenis_perawatan_id' => 2,
        ]);
    }
}
