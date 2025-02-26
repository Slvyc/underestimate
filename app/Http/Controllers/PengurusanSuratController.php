<?php

namespace App\Http\Controllers;

use App\Models\PengurusanSurat;
use Illuminate\Http\Request;

class PengurusanSuratController extends Controller
{
    public function index(Request $request)
    {
        $query = PengurusanSurat::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('pengurusan_surat', 'LIKE', "%{$search}%");
        }

        $PengurusanSurats = $query->get();

        if ($request->ajax()) {
            return view('partials.pengurusanSurat-table', compact('PengurusanSurats'))->render();
        }

        return view('download.pengurusanSurat', compact('PengurusanSurats'));
    }
}
