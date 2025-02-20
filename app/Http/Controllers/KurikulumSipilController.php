<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumSipil;

class KurikulumSipilController extends Controller
{
    public function index()
    {
        // Ambil semua data kurikulum
        $kurikulumSipils = KurikulumSipil::all();

        // Hitung total SKS per semester
        $sksPerSemester = $kurikulumSipils->groupBy('semester')->map(function ($items) {
            return $items->sum('sks');
        });

        // Hitung total seluruh SKS
        $totalSks = $kurikulumSipils->sum('sks');

        // Pastikan nama variabel di compact() sesuai dengan yang dideklarasikan
        return view('program-studi.teknik-sipil.kurikulumSipil', compact('kurikulumSipils', 'sksPerSemester', 'totalSks'));
    }
}
