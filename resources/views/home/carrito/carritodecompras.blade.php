@extends('layouts.header')

@section('content')
<title>Carrito de Compras</title>
<link rel="stylesheet" href="{{ asset('css/style_carrito.css') }}">
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
                                            <!-- Botón de eliminación con modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDelete{{$id}}">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>

                                            <!-- Modal de Confirmación de Eliminación -->
                                            <div class="modal fade" id="confirmDelete{{$id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel{{$id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmDeleteLabel{{$id}}">Confirmar Eliminación</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Estás seguro de que deseas eliminar este producto del carrito?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <form action="{{ route('carrito.remove', $id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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


<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
@extends('layouts.footer')

@section('footer')