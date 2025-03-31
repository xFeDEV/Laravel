<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        return view('index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validación de los datos
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|string|min:8|confirmed',
        'roles' => 'array', // Asegura que roles sea un array
        'roles.*' => 'exists:roles,id' // Verifica que los IDs de roles existen
    ], [
        'name.required' => 'El nombre es obligatorio.',
        'name.string' => 'El nombre debe ser una cadena de texto.',
        'name.max' => 'El nombre no puede superar los 255 caracteres.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'Debe ingresar un correo electrónico válido.',
        'email.unique' => 'El correo electrónico ya está registrado.',
        'email.max' => 'El correo no puede superar los 255 caracteres.',
        'password.required' => 'La contraseña es obligatoria.',
        'password.string' => 'La contraseña debe ser una cadena de texto.',
        'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        'password.confirmed' => 'Las contraseñas no coinciden.',
        'roles.array' => 'El formato de los roles no es válido.',
        'roles.*.exists' => 'Uno o más roles seleccionados no existen.'
    ]);

    // Creación del usuario
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Si se seleccionan roles, asignarlos al usuario
    if ($request->has('roles')) {
        $user->roles()->sync($request->roles);
    }

    return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    public function edit(User $user)
    {
        $roles = Role::all(); // Obtener todos los roles
        return view('editUser', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'roles' => 'array', // Asegura que roles sea un array
            'roles.*' => 'exists:roles,id' // Verifica que los IDs de roles existen
        ]);

        // Actualizar los datos del usuario sin cambiar la contraseña
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        // Sincronizar los roles seleccionados
        $user->roles()->sync($request->roles ?? []);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Eliminar relaciones con roles antes de borrar el usuario
        $user->roles()->detach();

        // Eliminar usuario
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
