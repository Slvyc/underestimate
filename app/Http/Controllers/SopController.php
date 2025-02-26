<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use Illuminate\Http\Request;

class SopController extends Controller
{
    public function index(Request $request)
    {
        $query = Sop::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama_file', 'LIKE', "%{$search}%")
                ->orWhere('date', 'LIKE', "%{$search}%");
        }

        $Sops = $query->get();

        if ($request->ajax()) {
            return view('partials.sop-table', compact('Sops'))->render();
        }

        return view('download.sop', compact('Sops'));
    }
}
