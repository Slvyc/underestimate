<?php

namespace App\Http\Controllers;

use App\Models\PenghargaanMahasiswa;
use Illuminate\Http\Request;

class PenghargaanMahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = PenghargaanMahasiswa::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('person', 'LIKE', "%{$search}%")
                ->orWhere('prestasi', 'LIKE', "%{$search}%")
                ->orWhere('tingkat', 'LIKE', "%{$search}%")
                ->orWhere('tahun', 'LIKE', "%{$search}%");
        }

        $PenghargaanMahasiswas = $query->get();

        if ($request->ajax()) {
            return view('partials.penghargaanMahasiswa-table', compact('PenghargaanMahasiswas'))->render();
        }

        return view('penghargaan.penghargaanMahasiswa', compact('PenghargaanMahasiswas'));
    }
}
