@extends('layouts.header')

@section('content')

<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <main class="main-content">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="/salud">Salud</a></li>
                            <li class="breadcrumb-item"><a>Dolor</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Dolor</h1>
    
                        <div class="productos-container">
                            @foreach($producto1 as $producto)
                                <div class="producto">
                                    <a href="{{ route('producto.vista', ['id' => $producto->id]) }}">
                                        <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                                    </a>
                                    <a class="nav-link" href="#"><h2 class="card-title">{{ $producto->nombre }}</h2>
                                    <p class="card-text">{{ $producto->descripcion }}</p>
                                    <p class="card-text"><strong>Precio:</strong> ${{ $producto->precio }} MXN</p>
                                    <div class="add-to-cart-button">
                                        <form action="{{ route('carrito.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                        <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </body>
                </main>
            </div>
        </div>
    </div>
</div>
  
@extends('layouts.footer')

@section('footer')
                        