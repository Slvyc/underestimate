<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenMesin extends Model
{
    use HasFactory;
    protected $fillable = ['gambar_dosen', 'nama_dosen', 'posisi_dosen', 'nidn', 'riwayat_prodi', 'riwayat_universitas', 'link_publikasi'];
}
