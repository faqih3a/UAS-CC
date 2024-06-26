<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Perawatan extends Model
{
    use HasFactory;
    protected $table = 'jenis_perawatan';
    protected $fillable = ['nama'];
    public $timestamps = false;
}
