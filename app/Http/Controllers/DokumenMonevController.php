<?php

namespace App\Http\Controllers;

use App\Models\DokumenMonev;
use Illuminate\Http\Request;

class DokumenMonevController extends Controller
{
    public function index(Request $request)
    {
        $query = DokumenMonev::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama_dokumen', 'LIKE', "%{$search}%")
                ->orWhere('date', 'LIKE', "%{$search}%");
        }

        $DokumenMonevs = $query->get();

        if ($request->ajax()) {
            return view('partials.dokumenMonev-table', compact('DokumenMonevs'))->render();
        }

        return view('penjaminan-mutu.dokumenMonev', compact('DokumenMonevs'));
    }
}
