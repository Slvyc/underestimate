<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kerjasama', 'lingkup_kerjasama', 'jenis_dokumen', 'status_kerjasama', 'link', 'tanggal'];
}
