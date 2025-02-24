<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all(); // trae toda la informacion en la variable $NOTES
        return view('index', compact('people'));
    }

    public function create()
    {
        return view('person');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Person::create($request->all());
        return redirect()->route('index');
    }


    public function edit(Person $person)
    {
        return view('edit', compact('person'));
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
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('index')->with('success', 'Nota actualizada con éxito');

        /* return redirect()->route('index')->with('success', 'Nota actualizada');
        $note = Note::find($note);
        $note->title = $request->title;
        $note->drescription = $request->drescription;
        $
 */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Person $person)
    {
        $person->delete();
        return redirect()->route('index');
    }
}
