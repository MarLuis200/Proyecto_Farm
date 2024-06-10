<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCreateRequestVentas extends FormRequest
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
            'fecha_venta' => 'required|date',
            'id_proveedor' => 'required|integer',
            'descripcion' => 'required|string',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
            'id_producto' => 'required|integer',
        ];
    }
}
