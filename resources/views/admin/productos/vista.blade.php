@extends('layouts.header')

@section('content')

<main class="main-content">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
        <script src="{{ asset('js/jquery.elevateZoom.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/style_vista.css') }}">


        <title>{{ $producto->nombre }}</title>
        
    </head>

    <body>
        <br>
        <br>
        <br>
        <nav aria-label="ruta de navegación">
            <div class="breadcrumb-module">
                <ul>
                    <li><a href="/">Inicio</a> <span class="divider">/</span></li>
                    <li><a href="javascript:history.back()">Regresar</a> <span class="divider">/</span></li>
                    <li class="current">{{ $producto->nombre }}</li>
                </ul>
            </div>
        </nav>

        <div class="product_pageDesign_pageGroup">
            <div class="angle-images-container">
                <div id="widget_product_image_viewer_5_-2021_3074457345618261556" class="widget_product_image_viewer">
                    <div class="content">
                        <div class="image_container">
                            <div class="zoomWrapper">
                                <img id="zoomImage" src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top product_main_image" alt="Imagen del Producto" width="400" height="400">
                            </div>
                            <h10>Pasa el mouse sobre la imagen para hacer zoom</h10>
                        </div>
                    </div>
                </div>
            </div>

            <div id="productFullWidthSlot56" class="pdp-container-detials">
                <div class="col12 acol9 ccol12 left slot5">
                    <div class="fgpdp_product-name_container">
                        <h1 id="fgProductName" class="fgpdp_product-name">{{ $producto->nombre }}</h1>
                    </div>
                    <div class="product_text">
                        <p>{{ $producto->descripcion }}</p>
                    </div>

                    <div class="price-listing-pdp">
                        <p class="price">${{ $producto->precio}} MXN</p>
                    </div>

                    <div class="product_text">
                        <li>Precio exclusivo para venta online y pueden diferir de los precios en sucursal</li>
                        <li>Los precios pueden variar dependiendo la zona geográfica</li>
                    </div>

                    <div class="add-to-cart-pdp-list">
                        <form action="{{ route('carrito.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                            <div class="quantity_section">
                                <label for="cantidad">Cantidad:</label>
                                <input type="number" name="cantidad" id="cantidad" class="quantity_input" value="1" min="1" max="10">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary fg-btn">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="productFullWidthSlot56" class="pdp-container-detials">
            <div class="col12 acol9 ccol12 left slot5">
                <h3>Descripción del Producto</h3>
                <div class="product_text">
                    <h4>{{ $producto->nombre }}</h4>
                    <p>{{ $producto->descripcion }}</p>
                </div>
            </div>
        </div>
        

        <script>
            function changeThumbNail(id, url) {
                const mainImage = document.querySelector('.product_main_image');
                mainImage.src = url;

                document.querySelectorAll('.other_views li').forEach(li => li.classList.remove('selected'));
                document.getElementById(id).classList.add('selected');
            }
        </script>

        <script>
            $(document).ready(function() {
                $('#zoomImage').elevateZoom({
                    zoomType: "lens",
                    lensShape: "round",
                    lensSize: 200,
                    scrollZoom: true,
                    cursor: "crosshair"
                });
            });
        </script>

    </body>

</main>
