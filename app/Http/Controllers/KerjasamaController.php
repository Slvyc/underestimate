<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerjasama;

class KerjasamaController extends Controller
{
    public function index(Request $request)
    {
        $query = Kerjasama::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama_kerjasama', 'LIKE', "%{$search}%")
                ->orWhere('lingkup_kerjasama', 'LIKE', "%{$search}%")
                ->orWhere('jenis_dokumen', 'LIKE', "%{$search}%")
                ->orWhere('tanggal', 'LIKE', "%{$search}%")
                ->orWhere('status_kerjasama', 'LIKE', "%{$search}%");
        }

        $Kerjasamas = $query->get();

        if ($request->ajax()) {
            return view('partials.kerjasama-table', compact('Kerjasamas'))->render();
        }

        return view('kerjasama', compact('Kerjasamas'));
    }

}
