@extends('layouts.dash')

@section('content')
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
