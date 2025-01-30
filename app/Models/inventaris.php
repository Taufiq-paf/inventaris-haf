<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_inventaris',
        'id_jenis',
        'nilai',
        'tahun',
        'sumber',
        'lokasi',
        'foto',
        'bidang',
        'nama_pj',
        'kota',
        'user',
    ];
}
