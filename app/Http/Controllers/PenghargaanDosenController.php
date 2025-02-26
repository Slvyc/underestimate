<?php

namespace App\Http\Controllers;

use App\Models\PenghargaanDosen;
use Illuminate\Http\Request;

class PenghargaanDosenController extends Controller
{
    public function index(Request $request)
    {
        $query = PenghargaanDosen::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('person', 'LIKE', "%{$search}%")
                ->orWhere('prestasi', 'LIKE', "%{$search}%")
                ->orWhere('tingkat', 'LIKE', "%{$search}%")
                ->orWhere('tahun', 'LIKE', "%{$search}%");
        }

        $PenghargaanDosens = $query->get();

        if ($request->ajax()) {
            return view('partials.penghargaanDosen-table', compact('PenghargaanDosens'))->render();
        }

        return view('penghargaan.penghargaanDosen', compact('PenghargaanDosens'));
    }
}
