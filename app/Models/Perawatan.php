<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;
    protected $table = 'perawatan';
    protected $fillable = ['tanggal', 'nama_mobil', 'km_mobil', 'biaya', 'jenis_perawatan', 'mobil_id', 'jenis_perawatan_id'];
    public $timestamps = false;
}
