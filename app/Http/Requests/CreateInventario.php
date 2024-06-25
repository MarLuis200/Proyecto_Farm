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
            'producto_id' => 'required|exists:productos,id',
            'stock' => 'required|integer',
            'fecha_caducidad' => 'required|date',
            'precio' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        ];
    }
}
