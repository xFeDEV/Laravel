<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all(); // trae toda la informacion en la variable $NOTES
        return view('index', compact('notes'));

    }

    public function create()
    {
        return view('note');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Note::create($request->all());
        return redirect()->route('index');
        /* return redirect()->route('index')->with('success', 'Nota fue ingresada'); */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
