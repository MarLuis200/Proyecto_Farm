<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInventario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'nombre' => 'required|unique:inventario|max:255',
            'existencia' => 'required',
            'fecha_caducidad' => 'required',
            'no_compra' => 'required',
            'clave_proveedor' => 'required',
            'img' => 'required',
        ];


    }
}
