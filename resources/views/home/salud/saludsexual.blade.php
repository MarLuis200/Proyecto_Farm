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
                            <li class="breadcrumb-item"><a href="/vitaminas">Vitaminas</a></li>
                            <li class="breadcrumb-item"><a>Vitaminas y Suplementos</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Vitaminas y complementos</h1>
    
                        <div class="productos-container">
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/clear.jpg" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h2>Clearblue</h2></a>
                                <p> La Prueba de Embarazo Clearblue Plus puede brindar resultado en sólo 1 minuto a partir del día de retraso.</p>
                                <p>Precio: $90.45</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/mer.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>Mercilon</h2></a>
                                <p>Mercilon 0.15mg/0.02mg, 21 Tabletas.</p>
                                <p>Precio: $210.34</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/marvel.avif" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Marvelón</h2></a>
                                <p>Marvelon 0.15mg/0.03mg, 21 Tabletas.</p>
                                <p>Precio: $298.48</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/trojan.avif" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Tronjan</h2></a>
                                <p>Trojan Condón Piel Desnuda Puntos de Placer, 3 pzas.</p>
                                <p>Precio: $50.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/triquilar.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Triquilar</h2></a>
                                <p>Triquilar, 21 Tabletas (Levonorgestrol, Etinilestradiol) </p>
                                <p>Precio: $301.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/rad.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Radiance</h2></a>
                                <p>Radiance 20 3mg/20mcg, 28 Comprimidos.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <!-- Puedes agregar más productos siguiendo el mismo patrón -->
                        </div>

                    </body>
                </main>
            </div>
        </div>
    </div>
</div>


    
@extends('layouts.footer')

@section('footer')
                        