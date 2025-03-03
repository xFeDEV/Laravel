<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Requests\PatientRequest;


class ControllerPatient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('index', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        Patient::create($request->all());
        return redirect()->route('index')->with('success', 'Paciente creada con exito');
    }

    public function create(Request $request)
    {
        return view('patient');
    }

    public function edit(Patient $patient)
    {
        return view('edit', compact('patient'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('show', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('index')->with('success', 'Persona actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('index')->with('danger', 'Paciente eliminado');
    }
}
