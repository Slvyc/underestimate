<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sopPanduan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_file', 'link', 'date'];
}
