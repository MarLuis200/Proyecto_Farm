@extends('layouts.home')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
                        <div class="container">
                            <img src="/img/Logo_Multifarma.png" class="img-fluid" width="210" height="210" alt="Nombre de la Marca"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse id="navbarsExample07">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/admin/salud">Salud<span class="sr-only"></span></a>
                                        <ul class="dropdown-content">
                                            <li><a href="/admin/salud/antibioticos">Antibióticos</a></li>
                                            <li><a href="/admin/salud/dolor">Dolor</a></li>
                                            <li><a href="/admin/salud/dermatologia">Dermatologia</a></li>
                                            <li><a href="/admin/salud/saludsexual">Salud Sexual</li>
                                            <!-- Agrega más elementos según sea necesario -->
                                        </ul>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/bebes">Bebes</a>
                                        <ul class="dropdown-content">
                                            <li><a href="/admin/bebes/antibioticos">Pañales</a></li>
                                            <li><a href="/admin/bebes/dolor">Formulas Infantiles</a></li>
                                            <li><a href="/admin/bebes/dermatologia">Alimentos Infantiles</a></li>
                                            <!-- Agrega más elementos según sea necesario -->
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/vitaminas">Vitaminas y Suplementos</a>
                                        <ul class="dropdown-content">
                                            <li><a href="/admin/vitaminas/complementos">Complementos Alimenticios</a></li>
                                            <li><a href="/admin/vitaminas/multivitaminas">Multivitaminas</a></li>
                                            <li><a href="/admin/vitaminas/suplementos">Suplementos Alimenticios</a></li>
                                            <!-- Agrega más elementos según sea necesario -->
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/departamentos">Departamentos</a>
                                        <ul class="dropdown-content">
                                            <li><a href="/admin/departamentos/alimentos">Alimentos</a></li>
                                            <li><a href="/admin/departamentos/bebidas">Bebidas</a></li>
                                            <li><a href="/admin/departamentos/higiene">Higiene y Belleza</a></li>
                                            <!-- Agrega más elementos según sea necesario -->
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/carrito">Carrito de Compras
                                        <img src="/img/carrito.png" class="img-fluid" width="30" height="10" alt="Carrito"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/ayuda">Ayuda</a>
                                        <ul class="dropdown-content">
                                            <li><a href="/admin/ayuda/contacto">Contactanos</a></li>
                                            <li><a href="/admin/ayuda/preguntas">Preguntas Frecuentes</a></li>
                                            <!-- Agrega más elementos según sea necesario -->
                                        </ul>
                                    </li>
                                    
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <!-- Enlace existente para Logout -->

                                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                                        {{ __('Dashboard') }}
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>

                                                    <!-- Nuevo enlace para Dashboard -->
                                                    
                                                </div>
                                            </li>
                                        @endguest
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                
                <main class="main-content">
                    <header>
                        <a class="nav-link" href="123">Da click aqui para conocer detalles y poblaciones donde tenemos servicio</a>
                    </header>
                    <section id="anuncios">
                        <!-- Aquí puedes incluir tus anuncios publicitarios -->
                        <div class="anuncio">
                            <a class="nav-link" href="#"><img src="/img/anuncio1.png" alt="Anuncio 1"></a>
                        </div>
                    </section>

                    <section id="productos">
                        <!-- Aquí puedes mostrar tus productos -->
                        <h2>Productos Destacados</h2>
                        <div class="productos-container">
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/vitacilina.jpg" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h3>Vitacilina</h3></a>
                                <p>(Retinol - Neomicina) Unguento 16G</p>
                                <p>Precio: $32.00 MXN</p>
                            </div>
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/Graneodin.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h3>Graneodin B 10mg</h3></a>
                                <p>24 Pastillas sabor Frambuesa</p>
                                <p>Precio: $139.00 MXN</p>
                            </div>
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/xl.jpg" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h3>Xl-3 Xtra</h3></a>
                                <p>Antigripal Gripa/Tos CAP C/12</p>
                                <p>Precio: $64.00 MXN</p>
                            </div>
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/tukol.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h3>Tukol-D</h3></a>
                                <p>Miel 2.0 g/0.2 g Guaifenesina, Dextrometorfano Adulto 120 ml Frasco</p>
                                <p>Precio: $175.00 MXN</p>
                            </div>
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/fisopred.jpg" class="img-fluid" width="200" height="200" alt="Producto 5"></a>
                                <a class="nav-link" href="#"><h3>Fisopred 100 mg</h3></a>
                                <p>Oral Pediatrico 100 ml</p>
                                <p>Precio: $380.00 MXN</p>
                            </div>
                        </div>
                    </section>

                    <section id="ofertas">
                        <!-- Aquí puedes mostrar tus ofertas -->
                        <h2>Aprovecha estas ofertas</h2>
                        <div class="oferta">
                            <img src="oferta1.jpg" alt="Oferta 1">
                            <h3>Nombre de la oferta 1</h3>
                            <p>Descripción de la oferta 1</p>
                        </div>
                        <div class="oferta">
                            <img src="oferta2.jpg" alt="Oferta 2">
                            <h3>Nombre de la oferta 2</h3>
                            <p>Descripción de la oferta 2</p>
                        </div>
                    </section>
                </main>

                <footer>
                    <p>&copy; 2024 MultiFarma - Tu farmacia de confianza. Todos los derechos reservados.</p>
                </footer>
            </body>
            </div>
        </div>
    </div>
</div>
@endsection


