<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanAkademik extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kegiatan' ,'link', 'tanggal_pelaksanaan'];
}
