@extends('layouts.header')

@section('content')
<title>Salud</title>

<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <main class="main-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item"><a>Salud</a></li>
                        </ol>
                    </nav>

                    <h1>Salud</h1>

                    <section id="anuncios">
                        <!-- Aquí puedes incluir tus anuncios publicitarios -->
                        <div class="productos-container">
                            <a class="nav-link" href="#"><img src="/img/publicidadsalud.png" alt="Anuncio 1"></a>
                        </div>
                    </section>

                    <h2>Encuentra las categorías de Salud</h2>

                    <div class="container mt-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Primera tanda de imágenes -->
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <a href="/salud/antibioticos"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/CAT_THUMB/medicina/ANTIBIOTICOS/DESK_2X_MEDICINA_ANTIBIOTICO.png" class="d-block mx-3" alt="Imagen 1"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/salud/antibioticos">Antibióticos</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/salud/dolor"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/CAT_THUMB/medicina/PRIMEROS%20AUX/DESK_2X_MEDICINA_PRIMEROS%20AUXILIOS.png" class="d-block mx-3" alt="Imagen 2"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/salud/dolor">Dolor</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/salud/dermatologia"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D2D5C3/D2D5C3.png" class="d-block mx-3" alt="Imagen 3"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/salud/dermatologia">Dermatología</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/salud/saludsexual"><img src="/img/saludsexual.jpg" class="d-block mx-3" alt="Imagen 4"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/salud/saludsexual">Salud Sexual</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/formulas"><img src="/img/formulas.jpg" class="d-block mx-3" alt="Imagen 5"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/bebes/formulas">Fórmulas Infantiles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Segunda tanda de imágenes -->
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <a href="/vitaminas/multivitaminas"><img src="/img/multivitaminas.jpg" class="d-block mx-3" alt="Imagen 1">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="#">Multivitaminas</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/departamentos/alimentos"><img src="/img/alimentos.jpg" class="d-block mx-3" alt="Imagen 2">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="#">Alimentos</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/departamentos/bebidas"><img src="/img/bebidas.jpg" class="d-block mx-3" alt="Imagen 3">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="#">Bebidas</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/departamentos/higiene"><img src="/img/higiene.jpg" class="d-block mx-3" alt="Imagen 4">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="#">Higiene y Belleza</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/pañales"><img src="/img/pañales.jpg" class="d-block mx-3" alt="Imagen 5">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="#">Pañales</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>



@extends('layouts.footer')

@section('footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
