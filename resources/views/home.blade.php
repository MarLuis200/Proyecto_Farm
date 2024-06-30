@extends('layouts.home')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_cards.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<title>Compra Antibioticos y Medicamentos</title>
<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
                    <div class="container">
                        <a class="nav-link" href="/"><img src="/img/Logo_Multifarma.png" class="img-fluid" width="210" height="210"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse id="navbarsExample07">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/salud">Salud</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/salud/antibioticos">Antibióticos</a></li>
                                        <li><a href="/salud/dolor">Dolor</a></li>
                                        <li><a href="/salud/dermatologia">Dermatologia</a></li>
                                        <li><a href="/salud/saludsexual">Salud Sexual</li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/bebes">Bebes</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/bebes/pañales">Pañales</a></li>
                                        <li><a href="/bebes/formulas">Formulas Infantiles</a></li>
                                        <li><a href="/bebes/infantiles">Alimentos Infantiles</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/vitaminas">Vitaminas y Suplementos</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/vitaminas/complementos">Complementos Alimenticios</a></li>
                                        <li><a href="/vitaminas/multivitaminas">Multivitaminas</a></li>
                                        <li><a href="/vitaminas/suplementos">Suplementos Alimenticios</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/departamentos">Departamentos</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/departamentos/alimentos">Alimentos</a></li>
                                        <li><a href="/departamentos/bebidas">Bebidas</a></li>
                                        <li><a href="/departamentos/higiene">Higiene y Belleza</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/carrito">Carrito de Compras
                                    <img src="/img/carrito.png" class="img-fluid" width="30" height="10" alt="Carrito"></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/ayuda">Ayuda</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/ayuda/contacto">Contactanos</a></li>
                                        <li><a href="/ayuda/preguntas">Preguntas Frecuentes</a></li>
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
                                        <li class="nav-item active dropdown">
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
                                                
                                            </div>
                                        </li>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <br>
                <main class="main-content">
                    <header>
                        <a class="nav-link" href="/ayuda/preguntas">Da click aqui para conocer detalles y poblaciones donde tenemos servicio</a>
                    </header>

                    <section>
                        <!-- Aquí puedes mostrar tus ofertas -->
                        <br><h2>Aprovecha estas ofertas</h2>
                        <div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="nav-link" href="/producto/8/vista"><img src="/img/ofertaadvil.png" class="d-block w-100" alt="Ofertas">
                                    </div>
                                    <div class="carousel-item">
                                        <a class="nav-link" href="/producto/5/vista"><img src="/img/ofertas.png" class="d-block w-100" alt="Ofertas 1">
                                    </div>
                                    <div class="carousel-item">
                                        <a class="nav-link" href="/producto/14/vista"><img src="/img/ofertas3.png" class="d-block w-100" alt="Ofertas 2">
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

                            @if($producto1)
                                <div class="producto">
                                    <a href="{{ route('producto.vista', ['id' => $producto1->id]) }}">
                                    <img src="{{ asset('uploads/' . $producto1->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                    </a>
                                    <h2>{{ $producto1->nombre }}</h2>
                                    <p>{{ $producto1->descripcion }}</p>
                                    <p>${{ $producto1->precio }} MXN</p>
                                    <button>Agregar al Carrito</button>
                                </div>
                            @endif

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

                            @if($producto3)
                                <div class="producto">
                                    <a href="{{ route('producto.vista', ['id' => $producto3->id]) }}">
                                    <img src="{{ asset('uploads/' . $producto3->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                    </a>
                                    <h2>{{ $producto3->nombre }}</h2>
                                    <p>{{ $producto3->descripcion }}</p>
                                    <p>${{ $producto3->precio }} MXN</p>
                                    <button>Agregar al Carrito</button>
                                </div>
                            @endif

                            @if($producto4)
                                <div class="producto">
                                    <a href="{{ route('producto.vista', ['id' => $producto4->id]) }}">
                                    <img src="{{ asset('uploads/' . $producto4->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                    </a>
                                    <h2>{{ $producto4->nombre }}</h2>
                                    <p>{{ $producto4->descripcion }}</p>
                                    <p>${{ $producto4->precio }} MXN</p>
                                    <button>Agregar al Carrito</button>
                                </div>
                            @endif
                            

                        </div>
                    </section>

                    <section>
                        <!-- Aquí puedes incluir tus anuncios publicitarios -->
                        <div>
                            <center><a class="nav-link" href="/fin-de-semana"><img src="/img/anuncio1.png" alt="Anuncio 1"></a></center>
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
                <br>
                <ul class="fg-link-box">
                    <li><a href="/salud" style="color: white;">Salud</a></li>
                    <li><a href="/departamento/alimentos" style="color: white;">Alimentos</a></li>
                    <li><a href="/bebes" style="color: white;">Bebés</a></li>
                    <li><a href="/departamento/bebidas-es" style="color: white;">Bebidas</a></li>
                    <li><a href="/departamento/higiene-y-belleza" style="color: white;">Higiene y Belleza</a></li>
                </ul>
            </div>

            <!-- Help Links -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <br>
                <h3>AYUDA</h3>
                <br>
                <ul class="fg-link-box">
                    <li><a href="/ayuda" class="fg-contact-us" style="color: white;">Ayuda</a></li>
                    <li><a href="/ayuda/contacto" class="fg-contact-us" style="color: white;">Contacto</a></li>
                    <li><a href="/ayuda/preguntas" style="color: white;">Preguntas Frecuentes</a></li>
                </ul>
            </div>

            <!-- Company Links -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <br>
                <h3>EMPRESA</h3>
                <br>
                <ul class="fg-link-box">
                    <li><a href="/sobre-nosotros/sobre-nosotros" style="color: white;">Conócenos</a></li>
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


