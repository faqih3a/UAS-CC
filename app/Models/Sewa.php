<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sewa extends Model
{
    use HasFactory;
    protected $table = 'sewa';
    protected $fillable = ['tanggal_mulai', 'tanggal_akhir', 'tujuan', 'mobil', 'mobil_id', 'nama_customer', 'no_ktp'];
    public $timestamps = false;
}
