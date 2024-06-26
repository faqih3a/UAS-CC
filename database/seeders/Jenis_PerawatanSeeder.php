<?php

namespace Database\Seeders;

use App\Models\Jenis_Perawatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jenis_PerawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tambah data dummy
        Jenis_Perawatan::create([
            'nama' => 'Body Repair',
        ]);

        Jenis_Perawatan::create([
            'nama' => 'Engine Repair',
        ]);
    }
}
