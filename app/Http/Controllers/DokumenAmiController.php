<?php

namespace App\Http\Controllers;

use App\Models\DokumenAmi;
use Illuminate\Http\Request;

class DokumenAmiController extends Controller
{
    public function index(Request $request)
    {
        $query = DokumenAmi::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama_dokumen', 'LIKE', "%{$search}%")
                ->orWhere('date', 'LIKE', "%{$search}%");
        }

        $DokumenAmis = $query->get();

        if ($request->ajax()) {
            return view('partials.dokumenAmi-table', compact('DokumenAmis'))->render();
        }

        return view('penjaminan-mutu.dokumenAmi', compact('DokumenAmis'));
    }
}
