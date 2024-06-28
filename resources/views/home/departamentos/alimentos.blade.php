@extends('layouts.header')

@section('content')
<<<<<<< HEAD
<div class="container col-md-12">
=======
<div class="container col-md-10">
>>>>>>> 128c73386d8455b69826e899aaa919f5c5b4e12e
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <main class="main-content">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
<<<<<<< HEAD
                            <li class="breadcrumb-item"><a href="/departamentos">Departamentos</a></li>
                            <li class="breadcrumb-item"><a>Alimentos</a></li>
=======
                            <li class="breadcrumb-item"><a href="/vitaminas">Vitaminas y Suplementos</a></li>
                            <li class="breadcrumb-item"><a>Complementos Alimenticios</a></li>
>>>>>>> 128c73386d8455b69826e899aaa919f5c5b4e12e
                        </ol>
                    </nav>

                        
                    <body>
<<<<<<< HEAD
                        <h1>Alimentos</h1>
    
                        <div class="productos-container">

                             @foreach($producto13 as $producto)
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
=======
                        <h1>Complementos Alimenticios</h1>
    
                        <div class="productos-container">

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/centrum.avif" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h2>Centrum Multivitamínicos</h2></a>
                                <p>Proporciona una mezcla completa de vitaminas y minerales.</p>
                                <p>Precio: $120.05</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/omega3.webp" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>Omega-3 Fish Oil</h2></a>
                                <p>Contiene ácidos grasos Omega-3 para apoyar la salud cardiovascular.</p>
                                <p>Precio: $98.50</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/densia.jpg" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Densia (Vitamina D)</h2></a>
                                <p>Suplemento de vitamina D para fortalecer los huesos.</p>
                                <p>Precio: $345.65</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/yakult.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Yakult</h2></a>
                                <p>Ayudan a mantener un equilibrio saludable de la flora intestinal.</p>
                                <p>Precio: $12.99</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/magnesio.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Magnesio Magnezone</h2></a>
                                <p>Suplemento de magnesio para apoyar la función muscular y nerviosa.</p>
                                <p>Precio: $340.10</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/proteina.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Proteína Nitro Tech</h2></a>
                                <p>Para apoyar el desarrollo muscular y la recuperación post-entrenamiento.</p>
                                <p>Precio: $900.00</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <!-- Puedes agregar más productos siguiendo el mismo patrón -->
                        </div>

>>>>>>> 128c73386d8455b69826e899aaa919f5c5b4e12e
                    </body>
                </main>
            </div>
        </div>
    </div>
</div>


    
@extends('layouts.footer')

@section('footer')
<<<<<<< HEAD
                            

=======
>>>>>>> 128c73386d8455b69826e899aaa919f5c5b4e12e
                        