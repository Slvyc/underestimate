<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumSi;

class KurikulumSiController extends Controller
{
    public function index()
    {
        // Ambil semua data kurikulum
        $kurikulumSis = KurikulumSi::all();

        // Hitung total SKS per semester
        $sksPerSemester = $kurikulumSis->groupBy('semester')->map(function ($items) {
            return $items->sum('sks');
        });

        // Hitung total seluruh SKS
        $totalSks = $kurikulumSis->sum('sks');

        // Pastikan nama variabel di compact() sesuai dengan yang dideklarasikan
        return view('program-studi.sistem-informasi.kurikulumSi', compact('kurikulumSis', 'sksPerSemester', 'totalSks'));
    }
}
