<?php

namespace App\Http\Controllers;

use App\Models\sopPanduan;
use Illuminate\Http\Request;

class SopPanduanController extends Controller
{
    public function index(Request $request)
    {
        $query = sopPanduan::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama_file', 'LIKE', "%{$search}%")
                ->orWhere('date', 'LIKE', "%{$search}%");
        }

        $SopPanduans = $query->get();

        if ($request->ajax()) {
            return view('partials.sopPanduan-table', compact('SopPanduans'))->render();
        }

        return view('penjaminan-mutu.sopPanduan', compact('SopPanduans'));
    }
}
