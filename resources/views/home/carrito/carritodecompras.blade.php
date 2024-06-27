@extends('layouts.header')

@section('content')

<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <main class="main-content">

                
<div class="container mt-5">
    <h1>Carrito de Compras</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (count($cartItems) > 0)
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $id => $item)
                    <tr>
                        <td>{{ $item['nombre'] }}</td>
                        <td>${{ number_format($item['precio'], 2) }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>${{ number_format($item['precio'] * $item['cantidad'], 2) }}</td>
                        <td>
                            
                            <form action="{{ route('carrito.update', $id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <input type="number" name="cantidad" value="{{ $item['cantidad'] }}" min="1" style="width: 50px;">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                            <form action="{{ route('carrito.remove', $id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">
            No hay productos en el carrito.
        </div>
    @endif
</div>


                </main>
            </div>
        </div>
    </div>
</div>