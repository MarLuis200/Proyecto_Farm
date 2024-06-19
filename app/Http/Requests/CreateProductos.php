<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductos extends FormRequest
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
            'nombre' => 'required|unique:productos|max:255',
            'descripcion' => 'required',
            'fecha_caducidad' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'img' => 'required',
        ];


    }
}
