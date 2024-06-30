@extends('layouts.header')

@section('content')

<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <main class="main-content">

                    <div class="container mt-5">
                        <h1 class="mb-4">Carrito de Compras</h1>
                        <p class="lead">¡Bienvenido a tu carrito de compras! Aquí puedes revisar y gestionar los productos seleccionados.</p>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (count($cartItems) > 0)
                            <table class="table table-hover mt-4">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $id => $item)
                                        <tr>
                                            <td class="align-middle">{{ $item['nombre'] }}</td>
                                            <td class="align-middle"><img src="{{ asset('uploads/' . $item['img']) }}" alt="{{ $item['nombre'] }}" class="img-thumbnail" style="width: 100px;"></td>                                          
                                            <td class="align-middle">${{ number_format($item['precio'], 2) }}</td>
                                            <td class="align-middle">
                                                <form action="{{ route('carrito.update', $id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="number" name="cantidad" value="{{ $item['cantidad'] }}" min="1" class="form-control d-inline-block" style="width: 60px;">
                                                    <button type="submit" class="btn btn-primary btn-sm mt-2"><i class="fas fa-sync-alt"></i> Actualizar</button>
                                                </form>
                                            </td>
                                            <td class="align-middle">${{ number_format($item['precio'] * $item['cantidad'], 2) }}</td>
                                            <td class="align-middle">
                                                <form action="{{ route('carrito.remove', $id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-right"><strong>Total a Pagar:</strong></td>
                                        <td colspan="2" class="align-middle">${{ number_format($totalNeto, 2) }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <form action="{{ route('carrito.comprar') }}" method="POST" class="mt-3 text-right">
                                @csrf
                                <button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Comprar</button>
                            </form>
                        @else
                            <div class="alert alert-info">
                                No hay productos en el carrito.
                            </div>
                        @endif
                    </div>

                    <div class="container mt-5">
                        <h2>Recomendaciones para ti</h2>
                        <div class="row">
                            @foreach ($recommendedProducts as $product)
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="{{ asset('uploads/' . $product->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->nombre }}</h5>
                                            <p class="card-text">${{ number_format($product->precio, 2) }}</p>
                                            <a href="{{ route('producto.vista', ['id' => $product->id]) }}" class="btn btn-primary">Ver Producto</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 0.5rem;
    }

    .thead-dark th {
        background-color: #343a40;
        color: #fff;
    }

    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
    }

    .img-thumbnail {
        border: none;
        border-radius: 0.25rem;
    }

    .btn-primary, .btn-danger, .btn-success {
        border-radius: 1.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .form-control {
        display: inline-block;
        width: auto;
        margin: 0;
    }

    .form-control:focus {
        box-shadow: none;
    }
</style>

<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
@extends('layouts.footer')

@section('footer')
                            
