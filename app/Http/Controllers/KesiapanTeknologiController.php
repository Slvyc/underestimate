<?php

namespace App\Http\Controllers;

use App\Models\KesiapanTeknologi;
use Illuminate\Http\Request;

class KesiapanTeknologiController extends Controller
{
    public function index(Request $request)
    {
        $query = KesiapanTeknologi::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('produk_inovasi', 'LIKE', "%{$search}%")
                ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                ->orWhere('nilai_tkt', 'LIKE', "%{$search}%")
                ->orWhere('tanggal', 'LIKE', "%{$search}%");
        }

        $KesiapanTeknologis = $query->get();

        if ($request->ajax()) {
            return view('partials.kesiapanTeknologi-table', compact('KesiapanTeknologis'))->render();
        }

        return view('penjaminan-mutu.kesiapanTeknologi', compact('KesiapanTeknologis'));
    }
}
