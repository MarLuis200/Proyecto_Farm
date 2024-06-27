@extends('layouts.header')

@section('content')

<main class="main-content">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $producto->nombre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .breadcrumb-module {
            background-color: #fff;
            padding: 10px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .breadcrumb-module ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .breadcrumb-module li {
            margin-right: 5px;
        }
        .breadcrumb-module a {
            color: #007bff;
            text-decoration: none;
        }
        .container-pdp {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .product_main_image {
            width: 100%;
            max-width: 400px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .other_views ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
            display: flex;
            justify-content: center;
        }
        .other_views li {
            margin: 0 5px;
        }
        .other_views img {
            width: 60px;
            height: auto;
            cursor: pointer;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .product_pageDesign_pageGroup {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
        }
        .pdp-container-detials {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .fgpdp_product-name {
            font-size: 34px;
            margin-bottom: 10px;
        }
        .product_text p {
            font-size: 17px;
            margin-bottom: 20px;
        }
        .price-listing-pdp {
            display: flex;
            align-items: baseline;
            margin-bottom: 20px;
        }
        .old_price {
            text-decoration: line-through;
            color: #888;
            margin-right: 10px;
        }
        .price {
            font-size: 24px;
            color: #e53935;
        }
        .add-to-cart-pdp-list {
            display: flex;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .quantity_section {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .quantity_input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 10px;
        }
        .fg-btn {
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            flex-shrink: 0;
        }
        .fg-btn__primary:hover {
            background-color: #0056b3;
        }
        .fgpdp_ExtraInfo_additional-info-container ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .fgpdp_ExtraInfo_additional-info-container li {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            margin: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <nav aria-label="ruta de navegación"
        <div class="breadcrumb-module">
            <ul>
                <li><a href="/">Inicio</a> <span class="divider">/</span></li>
                <li><a href="/salud/dolor">Dolor</a> <span class="divider">/</li>
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
                        <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="Imagen del Producto" width="400" height="400" >
                        </div>
                    </div>
                    <div class="other_views" id="ProductAngleProdImagesArea">
                        <ul id="ProductAngleProdImagesAreaProdList">
                            <li class="selected">
                                <a href="javascript:changeThumbNail('productAngleProdLi0','https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS/wcs/products/26484_A_1280_AL.jpg');">
                                    <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:changeThumbNail('productAngleProdLi1','https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS/wcs/products/26484_S_1280_F.jpg');">
                                    <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:changeThumbNail('productAngleProdLi2','https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS/wcs/products/26484_S_1280_B.jpg');">
                                    <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:changeThumbNail('productAngleProdLi3','https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS/wcs/products/26484_P_1280_E.jpg');">
                                    <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:changeThumbNail('productAngleProdLi4','https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS/wcs/products/26484_P_1280_E2.jpg');">
                                <img src="{{ asset('uploads/' . $producto->img) }}" class="card-img-top" alt="Imagen del Producto 1">
                                </a>
                            </li>
                        </ul>
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
                    <div class="quantity_section">
                        <label for="quantity" class="quantity_label">Cantidad:</label>
                        <input type="number" id="quantity" class="quantity_input" name="quantity" value="1" min="1" max="10">
                    </div>
                    <div class="add-to-cart-button">
                        <a href="#" class="fg-btn fg-btn__primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="productFullWidthSlot56" class="pdp-container-detials">
        <div class="col12 acol9 ccol12 left slot5">
        <h3>Descripcion del Producto</h3>
        </div> 
    </div>
    <br>   

    <div id="productFullWidthSlot56" class="pdp-container-detials">
        <div class="col2 acol2 ccol2 left slot2">
            <div class="product_text">
                        <h4 >{{ $producto->nombre }}</h4>
                        <p>{{ $producto->descripcion }}</p>
            </div>
        </div>
    </div>
    <br>

    <div id="productFullWidthSlot56" class="pdp-container-detials">
        <div class="col12 acol9 ccol12 left slot5">
        <h3>Advertencias</h3>
        </div> 
    </div>
    <br>   

    <div id="productFullWidthSlot56" class="pdp-container-detials">
        <div class="col2 acol2 ccol2 left slot2">
            <div class="product_text">
                <p>
                    No usar Graneodín B en personas hipersensibles a la benzocaína o a los componentes de la fórmula. En caso de embarazo o lactancia, 
                    consulte a su médico. El uso de Graneodín B puede causarle anestesia ligera en lengua y reacciones alérgicas. No se deje al alcance de los niños. 
                    Si persisten las molestias consulte a su médico. Protéjase de la luz. Consérvese a no más de 30°C. Consérvese la caja bien cerrada.
                    </p>
            </div>
        </div>
    </div>
    <br>

    <div id="productFullWidthSlot56" class="pdp-container-detials">
        <div class="col12 acol9 ccol12 left slot5">
        <h3>Beneficios</h3>
        </div> 
    </div>
    <br>   

    <div id="productFullWidthSlot56" class="pdp-container-detials">
        <div class="col2 acol2 ccol2 left slot2">
            <div class="product_text">
                <p>
                Para el alivio del dolor y el malestar que acompaña a los procesos irritativos leves de la garganta.
                    </p>
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
</body>
</html>
