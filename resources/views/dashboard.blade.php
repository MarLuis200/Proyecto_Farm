@extends('layouts.dash')

@section('content')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Incluye jQuery y la librería de Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="./js/app.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="menu-dashboard">
            <!-- TOP MENU -->
            <div class="top-menu">
                <div class="logo">
                    <img src="./img/logo_farmacia.png" width="100" height="40">
                    <span>Dashboard</span>
                </div>
                <div class="toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </div>
            <!-- INPUT SEARCH -->
            <div class="input-search">
                <i class='bx bx-search'></i>
                <input type="text" class="input" placeholder="Buscar">
            </div>
            <!-- MENU -->
            <div class="menu">
                <div class="enlace" data-url="/admin/clientes">
                    <i class="bx bx-user"></i>
                    <span>Clientes</span>
                </div>
                <div class="enlace" data-url="/admin/proveedores">
                    <i class="bx bx-grid-alt"></i>
                    <span>Proveedores</span>
                </div>
                <div class="enlace" data-url="/admin/productos">
                    <i class="bx bx-cart"></i>
                    <span>Productos</span>
                </div>

                <div class="enlace" data-url="/admin/inventario">
                    <i class="bx bx-box"></i>
                    <span>Inventario</span>
                </div>
                <div class="home" data-url="/home">
                    <i class="bx bx-log-out"></i>
                    <span>Home</span>
                </div>
            </div>
        </div>
        <!-- Contenedor donde se cargará el contenido -->
        <div id="content-container" class="content-container"></div>
    </div>

    <!-- CUSTOM JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/app.js" defer></script>
    <script>
        $(document).ready(function() {
            $('.home').click(function() {
                var url = $(this).data('url');
                window.location.href = url;
            });
        });
    </script>

@endsection
