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
                            <li class="breadcrumb-item"><a>Dermatología</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Dermatología</h1>
    
                        <div class="productos-container">
                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/beta.jpg" class="img-fluid" width="200" height="200" alt="Producto 1"></a>
                                <a class="nav-link" href="#"><h2>Tempra Boots</h2></a>
                                <p> Creama para tratar la picazón, enrojecimiento, resequedad, costras, descamación, inflamación entre otras molestias </p>
                                <p>Precio: $210.45</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/aciclor.jpg" class="img-fluid" width="200" height="200" alt="Producto 2"></a>
                                <a class="nav-link" href="#"><h2>Aciclovir</h2></a>
                                <p>Crema, para reducir el dolor y acelerar la curación de las heridas o ampollas en las personas que tienen varicela</p>
                                <p>Precio: $100.34</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/bibend.jpg" class="img-fluid" width="200" height="200" alt="Producto 3"></a>
                                <a class="nav-link" href="#"><h2>Biobend</h2></a>
                                <p>Alivio local sintomático del dolor e irritación de la garganta, boca y encías que cursen sin fiebre, 50 ml.</p><br>
                                <p>Precio: $193.48</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/gel.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Finace, gel</h2></a>
                                <p>Es para el alivio del acné , leve a moderado, de la zona facial  60 ml</p><br><br>
                                <p>Precio: $201.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/keto.webp" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Ketoconazol</h2></a>
                                <p>Se usa para tratar la tinea corporis (tiña, tiña corporal; infección) 60 ml.</p><br><br>
                                <p>Precio: $150.02</p>
                                <button>Agregar al Carrito</button>
                            </div>

                            <div class="producto">
                                <a class="nav-link" href="#"><img src="/img/senotra.jpg" class="img-fluid" width="200" height="200" alt="Producto 4"></a>
                                <a class="nav-link" href="#"><h2>Sertaconazol</h2></a>
                                <p>Se usa para tratar el pie de atleta (infección de hongos que ataca la piel de los pies, principalmente la que está entre los dedos) 60ml</p>
                                <p>Precio: $301.02</p>
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
                        