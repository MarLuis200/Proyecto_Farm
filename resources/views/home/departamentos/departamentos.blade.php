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
                            <li class="breadcrumb-item"><a>Departamentos</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Departamentos</h1>

                        <section id="anuncios">
                            <!-- Aquí puedes incluir tus anuncios publicitarios -->
                            <div class="productos-container">
                                <a class="nav-link" href="/departamentos/depalimentos">
                                    <img src="/img/departamentos.jpeg" alt="Anuncio 1" style="width: 100%; max-width: 600x; height: auto;">
                                </a>
                            </div>
                        </section>

                        <h2>Encuentra las categorias de Departamentos</h2>
                
                        <div class="container mt-5">
                            
                                    <div class="d-flex justify-content-center">

                                        <div>
                                            <a href="/departamentos/depalimentos"><img src="img/alimentos.jpeg" width="140" height="140" class="d-block mx-3" style="border-radius: 50%;" alt="Imagen 1"></a>
                                            <div class="container">
                                                    <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/departamentos/depalimentos">Alimentos</a>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="/departamentos/bebidas"><img src="/img/bebidass.jpg" width="140" height="140" class="d-block mx-3" style="border-radius: 50%;" alt="Imagen 2"></a>
                                            <div class="container">
                                                    <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/departamentos/bebidas">Bebidas</a>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="/departamentos/higiene"><img src="/img/belleza.jpg" width="140" height="140" class="d-block mx-3" style="border-radius: 50%;" alt="Imagen 3"></a>
                                            <div class="container">
                                                    <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="/departamentos/higiene">Higiene y Belleza</a>
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
                        

                        


