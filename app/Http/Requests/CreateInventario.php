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
            'persona_id' => 'required|unique:inventario|max:255',
            'stock' => 'required',
            'fecha_caducidad' => 'required',
            'precio' => 'required',
            'img' => 'required',
        ];


    }
}
