<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RosterAkademik extends Model
{
    use HasFactory;
    protected $fillable = ['roster_sipil', 'roster_mesin', 'roster_sistem_informasi'];
}
