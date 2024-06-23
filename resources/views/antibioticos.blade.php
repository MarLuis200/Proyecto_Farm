<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_antibioticos.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="/img/logo_farmacia.png" />
<title>Compra Antibioticos y Medicamentos</title>
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
                                    <a class="nav-link" href="/salud">Salud</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/salud/antibioticos">Antibióticos</a></li>
                                        <li><a href="/salud/dolor">Dolor</a></li>
                                        <li><a href="/salud/dermatologia">Dermatologia</a></li>
                                        <li><a href="/salud/saludsexual">Salud Sexual</li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home/bebes">Bebes</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/home/bebes/antibioticos">Pañales</a></li>
                                        <li><a href="/home/bebes/dolor">Formulas Infantiles</a></li>
                                        <li><a href="/home/bebes/dermatologia">Alimentos Infantiles</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home/vitaminas">Vitaminas y Suplementos</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/home/vitaminas/complementos">Complementos Alimenticios</a></li>
                                        <li><a href="/home/vitaminas/multivitaminas">Multivitaminas</a></li>
                                        <li><a href="/home/vitaminas/suplementos">Suplementos Alimenticios</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home/departamentos">Departamentos</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/home/departamentos/alimentos">Alimentos</a></li>
                                        <li><a href="/home/departamentos/bebidas">Bebidas</a></li>
                                        <li><a href="/home/departamentos/higiene">Higiene y Belleza</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home/carrito">Carrito de Compras
                                    <img src="/img/carrito.png" class="img-fluid" width="30" height="10" alt="Carrito"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home/ayuda">Ayuda</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/home/ayuda/contacto">Contactanos</a></li>
                                        <li><a href="/home/ayuda/preguntas">Preguntas Frecuentes</a></li>
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
                                                
                                            </div>
                                        </li>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="main-content">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="/salud">Salud</a></li>
                            <li class="breadcrumb-item"><a>Antibioticos</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Antibióticos</h1>
    
                        <div class="productos-container">
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/fosfocil.jpeg" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h2>Fosfocil</h2></a>
                                <p> Fosfocil 250mg/5ml Suspensión, 60 ml.</p>
                                <p>Precio: $219.45</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/amoxil.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>Amoxil</h2></a>
                                <p>Amoxil 500 mg, 12 Cápsulas.</p><br>
                                <p>Precio: $218.34</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/argentafil.webp" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Argentafil</h2></a>
                                <p>Argentafil 1% Suspensión Spray, 30 ml.</p>
                                <p>Precio: $193.48</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/gremiltal.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Gremiltal</h2></a>
                                <p>Gremiltal 75 mg, 10 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/azi.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Gremiltal</h2></a>
                                <p>Gremiltal 75 mg, 10 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/amox.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Gremiltal</h2></a>
                                <p>Gremiltal 75 mg, 10 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/clamo.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Gremiltal</h2></a>
                                <p>Gremiltal 75 mg, 10 Cápsulas.</p>
                                <p>Precio: $501.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <img src="ruta/a/tu/imagen2.jpg" alt="Producto 2">
                                <h2>Producto 8</h2>
                                <p>Descripción breve del Producto 8.</p>
                                <p>Precio: $30.00</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <!-- Puedes agregar más productos siguiendo el mismo patrón -->
                        </div>

                    </body>
    

                        