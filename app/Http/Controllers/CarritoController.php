<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Venta;

class CarritoController extends Controller
{
   
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $totalNeto = array_reduce($cartItems, function ($carry, $item) {
            return $carry + ($item['precio'] * $item['cantidad']);
        }, 0);

        return view('/home/carrito/carritodecompras',compact('cartItems', 'totalNeto'));
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
        $quantity = $request->input('cantidad', 1); // Por defecto, agregar 1 si no se especifica
    
        // Obtener el producto desde la base de datos
        $producto = Productos::findOrFail($id);
    
        // Obtener el carrito desde la sesión (o crear uno nuevo si no existe)
        $cart = session()->get('cart', []);
    
        // Si el producto ya está en el carrito, aumentar la cantidad
        if(isset($cart[$id])) {
            $cart[$id]['cantidad'] += $quantity;
        } else {
            // Si el producto no está en el carrito, agregarlo
            $cart[$id] = [
                'id' => $producto->id, // Asegurarse de que el ID del producto esté aquí
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'cantidad' => $quantity,
                'img' => $producto->img
            ];
        }
    
        // Guardar el carrito en la sesión
        session()->put('cart', $cart);
    
        return redirect()->route('carrito')->with('success', 'Producto agregado al carrito');
    }
    

    public function comprar(Request $request)
    {
        $cartItems = session()->get('cart', []);

        foreach ($cartItems as $id => $item) {
            Venta::create([
                'producto_id' => $id,
                'cantidad' => $item['cantidad'],
                'total' => $item['precio'] * $item['cantidad'],
            ]);
        }

        // Limpiar el carrito
        session()->forget('cart');

        return redirect()->route('carrito')->with('success', 'Compra realizada con éxito.');
    }

    
}
