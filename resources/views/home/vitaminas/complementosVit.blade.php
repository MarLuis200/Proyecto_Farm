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
                            <li class="breadcrumb-item"><a>Vitaminas Y Suplementos</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Vitaminas Y Suplementos</h1>

                        <section id="anuncios">
                            <!-- Aquí puedes incluir tus anuncios publicitarios -->
                            <div class="productos-container">
                                <a class="nav-link" href="/vitaminas/multivitaminas"><img src="/img/mutivitaminas.png" alt="Anuncio 1"></a>
                            </div>
                        </section>

                        <h2>Encuentra las categorias de Vitaminas y Suplementos</h2>
                
                        <div class="container mt-5">
                            
                                    <div class="d-flex justify-content-center">

                                        <div>
                                            <a href="/vitaminas/complementos"><img src="/img//comple.jpg" width="140" height="140" class="d-block mx-3" style="border-radius: 50%;" alt="Imagen 1"></a>
                                            <div class="container">
                                                    <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/vitaminas/complementos">Complementos Alimenticios</a>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="/vitaminas/multivitaminas"><img src="/img/multi.jpg" width="140" height="140" class="d-block mx-3" style="border-radius: 50%;" alt="Imagen 2"></a>
                                            <div class="container">
                                                    <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/vitaminas/multivitaminas">Multivataminas</a>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="/vitaminas/suplementos"><img src="/img/suplementosAlim.jpg" width="140" height="140" class="d-block mx-3" style="border-radius: 50%;" alt="Imagen 3"></a>
                                            <div class="container">
                                                    <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/vitaminas/suplementos">Suplementos Alimenticios</a>
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
                        

                        


