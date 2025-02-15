<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenghargaanDosen extends Model
{
    use HasFactory;

    protected $fillable = ['gambar_person', 'person', 'prestasi', 'tingkat', 'tahun', 'link', 'date'];

}
