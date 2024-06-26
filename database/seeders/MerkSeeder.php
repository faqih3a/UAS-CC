<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merk;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tambah data dummy
        Merk::create([
            'nama' => 'Toyota',
        ]);

        Merk::create([
            'nama' => 'Honda',
        ]);
    }
}
