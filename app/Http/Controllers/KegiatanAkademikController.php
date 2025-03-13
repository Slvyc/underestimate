<?php

namespace App\Http\Controllers;

use App\Models\KegiatanAkademik;
use Illuminate\Http\Request;

class KegiatanAkademikController extends Controller
{
    public function index(Request $request)
    {
        $query = KegiatanAkademik::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama_kegiatan', 'LIKE', "%{$search}%")
                ->orWhere('tanggal_pelaksanaan', 'LIKE', "%{$search}%");
        }

        $KegiatanAkademiks = $query->get(); 

        if ($request->ajax()) {
            return view('partials.kegiatanAkademik-table', compact('KegiatanAkademiks'))->render();
        }

        return view('download.kegiatanAkademik', compact('KegiatanAkademiks'));
    }
}
