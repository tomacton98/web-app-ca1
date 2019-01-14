<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Visits;
use App\Http\Controllers\Controller;

class VisitsController extends Controller
{
    public function index()
    {
        $visits = visit::all();

        return view('visit.index')->with([
            'visit' => $visits
        ]);
    }

    public function show($id)
    {
        $visit = visit::findOrFail($id);

        return view('visit.show')->with([
            'visit' => $visit
        ]);
    }
}
