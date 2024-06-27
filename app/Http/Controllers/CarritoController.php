<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class CarritoController extends Controller
{
   
    public function index()
    {
        $cartItems = session()->get('cart', []);
        return view('/home/carrito/carritodecompras',compact('cartItems'));
    }
    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('carrito')->with('success', 'Producto eliminado del carrito');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['cantidad'] = $request->cantidad;
            session()->put('cart', $cart);
        }
        return redirect()->route('carrito')->with('success', 'Cantidad del producto actualizada');
    }
    public function addToCart(Request $request)
    {
        $id = $request->input('producto_id');
        $quantity = $request->input('quantity', 1); // Por defecto, agregar 1 si no se especifica

        // Obtener el producto desde la base de datos
        $productos = Productos::findOrFail($id);

        // Obtener el carrito desde la sesión (o crear uno nuevo si no existe)
        $cart = session()->get('cart', []);

        // Si el producto ya está en el carrito, aumentar la cantidad
        if(isset($cart[$id])) {
            $cart[$id]['cantidad'] += $quantity;
        } else {
            // Si el producto no está en el carrito, agregarlo
            $cart[$id] = [
                'id' => $productos->id, // Asegurarse de que el ID del producto esté aquí
                'nombre' => $productos->nombre,
                'precio' => $productos->precio,
                'cantidad' => $quantity,
                'img' => $productos->img
            ];
        }

        // Guardar el carrito en la sesión
        session()->put('cart', $cart);

        return redirect()->route('carrito')->with('success', 'Producto agregado al carrito');
    }


}
