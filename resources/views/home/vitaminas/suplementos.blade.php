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
                            <li class="breadcrumb-item"><a>Suplementos Alimenticios</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Suplementos Alimenticios</h1>
    
                        <div class="productos-container">

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/whey.jpg" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h2>Proteína Whey Optimum Nutrition Gold Standard</h2></a>
                                <p>Suplemento de proteína de suero de leche de alta calidad, ideal para el desarrollo muscular y la recuperación post-entrenamiento.</p>
                                <p>Precio: $120.05</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/fish.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>Fish Oil Nature Made</h2></a>
                                <p>Suplemento de aceite de pescado rico en ácidos grasos omega-3, que promueve la salud cardiovascular y cerebral.</p>
                                <p>Precio: $98.50</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/platinium.webp" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Creatina Monohidrato MuscleTech Platinum</h2></a>
                                <p>Suplemento de creatina monohidrato pura para mejorar la fuerza y el rendimiento durante los entrenamientos de alta intensidad.</p>
                                <p>Precio: $345.65</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/xtend.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>BCAA Powder Scivation Xtend</h2></a>
                                <p>Suplemento de aminoácidos de cadena ramificada (BCAA) para apoyar la recuperación muscular y reducir la fatiga durante el ejercicio.</p>
                                <p>Precio: $12.99</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/spirulina.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Spirulina Powder Nutrex Hawaii</h2></a>
                                <p>Suplemento en polvo de espirulina, una alga rica en proteínas, vitaminas, minerales y antioxidantes.</p>
                                <p>Precio: $340.10</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/probiotic.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Probiotic 10 Nature's Bounty</h2></a>
                                <p>Suplemento probiótico con 10 cepas diferentes para promover la salud digestiva y el equilibrio de la microbiota intestinal.</p>
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
                        