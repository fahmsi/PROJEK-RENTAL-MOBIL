<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $tble = "mobils";

    protected $fillable = [
        'nama_mobil',
        'cc',
        'tahun_mobil',
        'warna',
        'nomor_polisi',
        'merk_id',
        'tipe_mobil_id',
        'foto'
    ];
}
