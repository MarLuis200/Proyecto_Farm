@extends('layouts.dash')

@section('content')
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
                    <li><a href="/admin/clientes" onclick="showSection('clientes')">Clientes</a></li>
                    <li><a href="/admin/proveedores" onclick="showSection('proveedores')">Proveedores</a></li>
                    <li><a href="/admin/productos" onclick="showSection('inventario')">Productos</a></li>
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
    