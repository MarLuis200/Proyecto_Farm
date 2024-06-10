@extends('layouts.home')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container col-md-10">
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
                                    <a class="nav-link" href="/admin/salud">Salud</a>
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
                                                <!-- Enlace existente para Dashboard -->

                                                <a class="dropdown-item" href="{{ route('dash2') }}">
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

                    <section id="ofertas">
                        <!-- Aquí puedes mostrar tus ofertas -->
                        <br><h2>Aprovecha estas ofertas</h2>
                        <div class="oferta">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/img/ofertas2.png" class="d-block w-100" alt="Ofertas">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/ofertas.png" class="d-block w-100" alt="Ofertas 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/ofertas3.png" class="d-block w-100" alt="Ofertas 2">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <!-- Enlace a jQuery y Bootstrap JS -->
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

                    <section id="anuncios">
                        <!-- Aquí puedes incluir tus anuncios publicitarios -->
                        <div class="anuncio">
                            <a class="nav-link" href="#"><img src="/img/anuncio1.png" alt="Anuncio 1"></a>
                        </div>
                    </section>

                </main>
            </div>
        </div>
    </div>
</div>


<footer id="content">
        <div class="col-xs-12 footerwrapper bg-primary text-white text-center " style="margin-top: 0px;">
        <div class="row">
            <!-- Footer Logo and Address -->
            <div class="col-lg-3 col-sm-4 col-xs-12 fg-ft-details">
                <div class="footer-logo">
                    <img src="/img/Logo_Multifarma.png" alt="Logo Farmacias Guadalajara" width="380" height="150" alt="Nombre de la Marca">
                </div>
                <div class="fg-address">
                    <p>Av. de las Américas #1254 - Int. UP6, P2<br>
                        Col. Country Club<br>
                        Guadalajara, Jalisco <br>
                        C.P. 44610</p>
                    <p><strong>Teléfonos Contact Center:</strong><br>
                        <a href="tel:+523338181818" style="color: white; text-decoration: underline">(33) 3818 1818</a><br>
                        <a href="tel:+528332762242" style="color: white; text-decoration: underline">(83) FARMACIA (32762242)</a>
                    </p>
                </div>
            </div>

            <!-- Online Store Links -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <br>
                <h3>TIENDA EN LÍNEA</h3>
                <ul class="fg-link-box">
                    <li><a href="/salud-es" style="color: white;">Salud</a></li>
                    <li><a href="/departamento/alimentos" style="color: white;">Alimentos</a></li>
                    <li><a href="/bebes" style="color: white;">Bebés</a></li>
                    <li><a href="/departamento/bebidas-es" style="color: white;">Bebidas</a></li>
                    <li><a href="/departamento/higiene-y-belleza" style="color: white;">Higiene y Belleza</a></li>
                    <li><a href="/departamento/electronicos" style="color: white;">Electrónico</a></li>
                    <li><a href="/departamento/hogar" style="color: white;">Hogar</a></li>
                    <li><a href="/departamento/jugueteria-es" style="color: white;">Juguetería</a></li>
                    <li style="display: none"><a href="/recarga-tiempo-aire" style="color: white;">Recarga de Tiempo Aire</a></li>
                </ul>
            </div>

            <!-- Help Links -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <br>
                <h3>AYUDA</h3>
                <ul class="fg-link-box">
                    <li><a href="/ayuda/contáctanos" class="fg-contact-us" style="color: white;">Contacto</a></li>
                    <li><a href="/ayuda/preguntas-frecuentes--24" style="color: white;">Preguntas Frecuentes</a></li>
                    <li><a href="/ayuda/localizador-de-superfarmacias" style="color: white;">Encuentra Tu SuperFarmacia</a></li>
                    <li><a href="/facturación-electrónica" style="color: white;">Factura Electrónica</a></li>
                    <li><a href="/locker-inteligente" style="color: white;">Smart & Collect</a></li>
                    <li><a href="/blog-es" style="color: white;">Blog</a></li>
                </ul>
            </div>

            <!-- Company Links -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <br>
                <h3>EMPRESA</h3>
                <ul class="fg-link-box">
                    <li><a href="/sobre-nosotros/sobre-nosotros" style="color: white;">Conócenos</a></li>
                    <li><a href="/sobre-nosotros/informacion-corporativa" style="color: white;">Corporativo</a></li>
                    <li><a href="/sobre-nosotros/relacion-con-inversionistas" style="color: white;">Relación con Inversionistas</a></li>
                    <li><a target="_blank" href="https://fragua.csod.com/ux/ats/careersite/1/home?c=fragua" style="color: white;">Bolsa de Trabajo</a></li>
                    <li><a href="/sobre-nosotros/politicas-de-privacidad" style="color: white;">Políticas de Privacidad</a></li>
                    <li><a href="/sobre-nosotros/terminos-y-condiciones" style="color: white;">Términos y Condiciones</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Text -->
        <div class="row fg-copyrt">
            <div class="col-xs-12">
                <p>Los precios y promociones mostrados en esta página online son exclusivos y estos pueden diferir de los precios y promociones de sucursal.</p>
                <p style="margin-bottom: 10px">Las imágenes mostradas son exclusivamente para uso ilustrativo.</p>
                <p>© MultiFarma es una empresa de Corporativo Fragua, S.A.B. de C.V. Todos los derechos reservados</p>
            </div>
        </div>
    </div>
</footer>
</div>

@endsection


