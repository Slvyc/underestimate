<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = ['tahun_agenda', 'judul_agenda', 'masa_agenda', 'date'];
}
