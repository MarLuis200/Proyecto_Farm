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
     * @return array
     */
    public function rules()
    {
        return [
            'fecha_venta' => 'required|unique:ventas|max:255',
            'id_proveedor' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'id_producto' => 'required',
        ];
    }
}
