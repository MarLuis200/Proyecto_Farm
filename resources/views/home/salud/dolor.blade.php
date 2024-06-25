@extends('layouts.header')

@section('content')

<div class="container col-md-10">
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
                            @if($producto2)
                                <div class="producto">
                                    <a href="{{ route('producto.vista', ['id' => $producto2->id]) }}">
                                    <img src="{{ asset('uploads/' . $producto2->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                    </a>
                                    <h2>{{ $producto2->nombre }}</h2>
                                    <p>{{ $producto2->descripcion }}</p>
                                    <p>${{ $producto2->precio }} MXN</p>
                                    <button>Agregar al Carrito</button>
                                </div>
                            @endif

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/advil.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>Advil</h2></a>
                                <p>Advil 500 mg, 10 Cápsulas liquidad.</p><br>
                                <p>Precio: $210.34</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/bio.jpg" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Bio Electro</h2></a>
                                <p>Bio Electro para el dolor de cabeza y migraña 250 mg, 25 Cápsulas.</p>
                                <p>Precio: $193.48</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/tylenol.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Tylenol</h2></a>
                                <p>Tylenol paracetamol 500 mg, 20 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/ibe.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Iberogast</h2></a>
                                <p>Iberogast para el dolor de estomago 50 ml.</p>
                                <p>Precio: $301.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/maal.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a><br><br><br>
                                <a class="nav-link" href="#"><h2>Maalox</h2></a>
                                <p>Maalox dolor de estomago y acides  400 mg, 10 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/flanax.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Flanax 550</h2></a>
                                <p>Desinflama y alivia el dolor intenso .5 Cápsulas.</p>
                                <p>Precio: $601.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/act.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Actromadol</h2></a>
                                <p>Actromadol 660 mg, 8 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>
                        </div>
                    </body>
                </main>
            </div>
        </div>
    </div>
</div>


    
@extends('layouts.footer')

@section('footer')
                        