@extends('layouts.header')

@section('content')

<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <main class="main-content">
                    <div class="container mt-5">
                        <h2>Ofertas de Fin de Semana</h2>
                        <br>
                        <section>
                        <!-- Aquí puedes incluir tus anuncios publicitarios -->
                            <div>
                                <center><a class="nav-link" href="/fin-de-semana"><img src="/img/ofertaschidas.jpg" alt="Anuncio 1"></a></center>
                            </div>
                        </section>
                        <div class="row">
                            @foreach ($recommendedProducts as $product)
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="{{ asset('uploads/' . $product->img) }}" class="card-img-top" alt="Imagen del Producto 1" width="300" height="300">
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
    
@extends('layouts.footer')

@section('footer')
                            
