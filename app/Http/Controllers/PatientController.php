<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        $patients = patient::all();

        return view('patient.index')->with([
            'patient' => $patients
        ]);
    }

    public function show($id)
    {
        $patient = patient::findOrFail($id);

        return view('patient.show')->with([
            'patient' => $patient
        ]);
    }
}
