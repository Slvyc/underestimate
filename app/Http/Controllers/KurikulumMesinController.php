<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumMesin;

class KurikulumMesinController extends Controller
{
    public function index()
    {
        // Ambil semua data kurikulum
        $kurikulumMesins = KurikulumMesin::all();

        // Hitung total SKS per semester
        $sksPerSemester = $kurikulumMesins->groupBy('semester')->map(function ($items) {
            return $items->sum('sks');
        });

        // Hitung total seluruh SKS
        $totalSks = $kurikulumMesins->sum('sks');

        // Pastikan nama variabel di compact() sesuai dengan yang dideklarasikan
        return view('program-studi.teknik-mesin.kurikulumMesin', compact('kurikulumMesins', 'sksPerSemester', 'totalSks'));
    }
}
