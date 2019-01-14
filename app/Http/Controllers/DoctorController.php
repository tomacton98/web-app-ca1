<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = doctor::all();

        return view('doctor.index')->with([
            'doctor' => $doctors
        ]);
    }

    public function show($id)
    {
        $doctor = doctor::findOrFail($id);

        return view('doctor.show')->with([
            'doctor' => $doctor
        ]);
    }
}
