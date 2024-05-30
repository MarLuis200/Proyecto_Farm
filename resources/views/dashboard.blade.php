@extends('layouts.dash')

@section('content')
<<<<<<< HEAD

    <title>Dashboard de Gestión de Farmacia</title>
    <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
</head>
<body>
    <div class="container">
        <aside>
            <header>
                <h1>Dashboard</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="#" onclick="showSection('clientes')">Clientes</a></li>
                    <li><a href="#" onclick="showSection('proveedores')">Proveedores</a></li>
                    <li><a href="#" onclick="showSection('inventario')">Inventario</a></li>
                    <li><a href="#" onclick="showSection('ventas')">Ventas</a></li>
                </ul>
            </nav>
        </aside>
        <main id="main-content">
            <section id="clientes" class="content-section">
                <h2>Clientes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí puedes agregar filas de clientes -->
                    </tbody>
                </table>
            </section>
            <section id="proveedores" class="content-section" style="display: none;">
                <h2>Proveedores</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Productos Suministrados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí puedes agregar filas de proveedores -->
                    </tbody>
                </table>
            </section>
            <section id="inventario" class="content-section" style="display: none;">
                <h2>Inventario</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID Producto</th>
                            <th>Nombre Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Fecha de Caducidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí puedes agregar filas de inventario -->
                    </tbody>
                </table>
            </section>
            <section id="ventas" class="content-section" style="display: none;">
                <h2>Ventas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID Venta</th>
                            <th>ID Cliente</th>
                            <th>ID Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Total</th>
                            <th>Fecha de Venta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí puedes agregar filas de ventas -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>
    <script>
        function showSection(sectionId) {
            // Ocultar todas las secciones
            var sections = document.querySelectorAll('.content-section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Mostrar la sección seleccionada
            var selectedSection = document.getElementById(sectionId);
            selectedSection.style.display = 'block';
        }
    </script>
</body>
</html>


@endsection
=======
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid bg-dark text-white">
                    <div class="container">
                        <h1 class="display">¡Bienvenido al Dashboard!</h1>
                                            </div>
                </div>
            </div>
        </div>

        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <div class="pt-3">
                        <ul class="nav flex-column">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="loadContent('{{ route('admin/clientes') }}', 'dashboard-content')">
                                    <i class="fas fa-users"></i> Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="loadContent('{{ route('admin/productos') }}', 'dashboard-content')">
                                    <i class="fas fa-cube"></i> Productos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="loadContent('{{ route('admin/proveedores') }}', 'dashboard-content')">
                                    <i class="fas fa-truck"></i> Proveedores
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div id="dashboard-content">
                    
                </div>
            </main>
        </div>
    </div>

    <script>
        function loadContent(url, targetId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById(targetId).innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', url, true);
            xhr.send();
        }
    </script>
@endsection
>>>>>>> fa89db20486d42338d887c8ab6db5cd6c63c9b82
