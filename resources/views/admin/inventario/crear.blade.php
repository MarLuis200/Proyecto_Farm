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

  <body>

  <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
        <div class="container">
            <img src="/img/logo1.jpg" class="img-fluid" width="50" height="50" alt="Nombre de la Marca"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="/admin/inventario">Regresar<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>

      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px; color: transparent;" class="text-center">.</h1>


              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1>Inventario</h1>
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
                          <li><a href="{{ route('admin/inventario') }}">Inventario</a></li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">

          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="{{ route('admin/inventario') }}"> Inventario</a>
                  </li>
               
              </ul>
            </div>
          </div>

            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/inventario') }}">Inventario</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Crear</h2></div>

              </div>

                <div class="panel-body">

                    <section class="example mt-4">

                      <form method="POST" action="{{ route('admin/inventario/store') }}" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @include('admin.inventario.frm.prt')

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
          Desarrollado por equipo Net Team</a>
      </div>
    </footer>


  </body>
</html>
