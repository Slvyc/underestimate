<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesiapanTeknologi extends Model
{
    use HasFactory;

    protected $fillable = ['produk_inovasi', 'deskripsi', 'nilai_tkt', 'link', 'tanggal'];
}
 