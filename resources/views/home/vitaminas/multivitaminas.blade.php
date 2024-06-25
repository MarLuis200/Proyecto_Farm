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
                            <li class="breadcrumb-item"><a href="/vitaminas">Vitaminas y Suplementos</a></li>
                            <li class="breadcrumb-item"><a>Multivitaminas</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Multivitaminas</h1>
    
                        <div class="productos-container">

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/centrumAdultos.webp" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h2>Centrum Adultos</h2></a>
                                <p> Multivitaminas completas para adultos con vitaminas esenciales y minerales.</p>
                                <p>Precio: $120.05</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/oneday.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>One A Day Women's Formula</h2></a>
                                <p>Multivitaminas especialmente formuladas para apoyar la salud femenina.</p>
                                <p>Precio: $98.50</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/alive.jpg" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Nature's Way Alive! Once Daily</h2></a>
                                <p>Multivitaminas de una vez al día con extractos de frutas y verduras.</p>
                                <p>Precio: $345.65</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/optimen.avif" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Optimum Nutrition Opti-Men</h2></a>
                                <p>Multivitaminas diseñadas para hombres activos, con ingredientes clave para el rendimiento.</p>
                                <p>Precio: $12.99</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/vitamincode.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Garden of Life Vitamin Code Men</h2></a>
                                <p>Multivitaminas crudas y completas, formuladas para hombres.</p>
                                <p>Precio: $340.10</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/dailymulti.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Kirkland Signature Daily Multi</h2></a>
                                <p>Multivitaminas diarias que ofrecen un equilibrio de nutrientes esenciales.</p>
                                <p>Precio: $300.00</p>
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
                        