<?php

namespace App\Http\Controllers;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(Request $request)
    {
        $query = Survey::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('jenis_survey', 'LIKE', "%{$search}%")
                ->orWhere('date', 'LIKE', "%{$search}%");
        }

        $Surveys = $query->get();

        if ($request->ajax()) {
            return view('partials.survey-table', compact('Surveys'))->render();
        }

        return view('penjaminan-mutu.survey', compact('Surveys'));
    }
}
