<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'documento' => 'required|max:255|min:3',
            'nombre' => 'required|max:255|min:3',
            'email' => 'required|max:255|min:3',
            'direccion' => 'required|max:255|min:3',
            'telefono' => 'required|max:255|min:3',
        ];
    }
    public function messages()
    {
        return[
            'documento.required' => 'el documento es requerido',
            'nombre.required' => 'el nombre es requerido',
            'email.required' => 'el email es requerido',
            'direccion.required' => 'el direccion es requerido',
            'telefono.required' => 'el telefono es requerido',
        ];
    }
}
