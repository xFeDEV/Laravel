<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
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
    public function store(PersonRequest $request)
    {
        Person::create($request->all());
        /* return redirect()->route('index'); */
        return redirect()->route('index')->with('success', 'Persona fue ingresada');
    }


    public function edit(Person $person)
    {
        return view('edit', compact('person'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return view('show', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('index')->with('success', 'Persona actualizada con éxito');

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
    public function destroy(PersonRequest $request, Person $person)
    {
        $person->delete();
        return redirect()->route('index')->with('danger', 'Nota eliminada');
    }
}