<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="icon" href="/img/logo_farmacia.png" />
    <meta name="theme-color" content="#000000" />
    <title>Crear</title>

    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])
  </head>
  
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
      <div class="container">
        <img src="/img/logo_MultiFarma.png" class="img-fluid" width="180" height="180" alt="Nombre de la Marca">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>

  <body>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                    <h1>Clientes</h1>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                        <!--
                        <input type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">Buscar</button>
                        </span>
                        -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li><a href="{{ route('admin/clientes') }}">Clientes</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="page-content">
            <div class="row">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-12">
                    <div class="content-box-large">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <h2>Crear</h2>
                        </div>
                      </div>
                      <div class="panel-body">
                        <section class="example mt-4">
                          <form method="POST" action="{{ route('admin/clientes/store') }}" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @include('admin.clientes.frm.prt')
                          </form>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado Por <a target="_blank">Equipo Net Team</a>
        </div>
      </footer>
      <main class="py-4">
            @yield('content')
        </main>
    </div>
  </body>
</html>