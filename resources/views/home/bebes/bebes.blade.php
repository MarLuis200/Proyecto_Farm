@extends('layouts.header')

@section('content')
<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <main class="main-content">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item"><a>Bebés</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Bebés</h1>

                        <section id="anuncios">
                            <!-- Aquí puedes incluir tus anuncios publicitarios -->
                            <div class="productos-container">
                                <a class="nav-link" href="/producto/32/vista"><img src="/img/ofertasuave.jpg" alt="Anuncio 1"></a>
                            </div>
                        </section>

                        <h2>Encuentra las categorias de Bebés</h2>
                
                        <div class="container mt-5">
                            
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <a href="/bebes/pañales"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C3/D4C3.png" class="d-block mx-3" alt="Imagen 1"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Pañales</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/cuidado-del-bebe"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C1/D4C1.png" class="d-block mx-3" alt="Imagen 2">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Formulas Infantiles</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/alimentos"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C5/D4C5.png" class="d-block mx-3" alt="Imagen 3">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Alimentos para Bebe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </main>
            </div>
        </div>
    </div>
</div>


    
@extends('layouts.footer')

@section('footer')
                        

                        


