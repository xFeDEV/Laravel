<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Muestra la lista de roles.
     */
    public function index()
    {
        $roles = Role::all();
        return view('rolesIndex', compact('roles'));
    }

    /**
     * Muestra el formulario para crear un nuevo rol.
     */
    public function create()
    {
        return view('roles');
    }

    /**
     * Guarda un nuevo rol en la base de datos.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:roles,name|max:255',
    ], [
        'name.required' => 'El nombre del rol es obligatorio.',
        'name.unique' => 'Este rol ya existe. Por favor, elige otro nombre.',
        'name.max' => 'El nombre del rol no puede superar los 255 caracteres.',
    ]);

    Role::create($request->only('name'));

    return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
}

    /**
     * Muestra el formulario de edición de un rol.
     */
    public function edit(Role $role)
    {
        return view('editRol', compact('role'));
    }

    /**
     * Actualiza un rol en la base de datos.
     */
    public function update(Request $request, Role $role)
{
    $request->validate([
        'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
    ], [
        'name.unique' => 'El nombre del rol ya existe. Por favor, elige otro.',
        'name.required' => 'El campo nombre es obligatorio.',
    ]);

    $role->update($request->only('name'));

    return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
}


    public function showUsers($id) {
        $rol = Role::findOrFail($id);
        $users = $rol->users; 
    
        return view('usersRol', compact('rol', 'users'));
    }

    /**
     * Elimina un rol de la base de datos.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}
