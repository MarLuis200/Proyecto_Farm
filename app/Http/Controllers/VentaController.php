<?php
namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Productos;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\VentaRequest;
use Illuminate\View\View;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();

        $ventas = Venta::join("productos", "ventas.producto_id", "=", "productos.id")
            ->select("ventas.cantidad", "ventas.total", "ventas.id", "productos.nombre", "productos.precio")
            ->get();

        return view('admin.venta.index', compact('ventas', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaRequest $request): RedirectResponse
    {
        // Encuentra el producto relacionado
        $producto = Productos::find($request->producto_id);
        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Calcula el total
        $total = $request->cantidad * $producto->precio;

        // Crea la venta con los datos del formulario
        $venta = new Venta();
        $venta->producto_id = $request->producto_id;
        $venta->cantidad = $request->cantidad;
        $venta->total = $total;

        // Guarda la venta en la base de datos
        $venta->save();

        // Redirección a la vista principal con un mensaje
        return redirect()->route('ventas.index')->with('message', 'Guardado Satisfactoriamente!');
    }

    public function show($id)
    {
        $ventas = Venta::find($id);
        return view('admin.venta.detalles', compact('ventas'));
    }

    public function actualizar($id)
    {
        $ventas = Venta::find($id);
        return view('admin/venta/actualizar',['ventas'=>$ventas]);
    }

    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $ventas = Venta::find($id);

        // Elimino el registro de la tabla 'productos'
        Venta::destroy($id);

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación
        // $productos->deleted_at = (new DateTime)->getTimestamp();

        // Muestro un mensaje y redirecciono a la vista principal
        return redirect()->route('ventas.index')->with('message', 'Eliminado Satisfactoriamente!');
        return Redirect::to('admin/venta');
    }
}
