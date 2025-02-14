<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengurusanSurat extends Model
{
    use HasFactory;

    protected $fillable = ['pengurusan_surat', 'link', 'date'];
}
