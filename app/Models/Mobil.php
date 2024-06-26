<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $fillable = ['nama', 'merk', 'no_polisi', 'warna', 'cc', 'harga_sewa', 'merk_id'];
    public $timestamps = false;
}
