<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DosenSipil extends Model
{
    use HasFactory;
    protected $fillable = ['gambar_dosen', 'nama_dosen', 'posisi_dosen', 'nidn', 'riwayat_prodi', 'riwayat_universitas', 'link_publikasi'];
}
