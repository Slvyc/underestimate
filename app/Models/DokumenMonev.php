<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DokumenMonev extends Model
{
    use HasFactory;

    protected $fillable = ['nama_dokumen', 'link', 'date'];
}
