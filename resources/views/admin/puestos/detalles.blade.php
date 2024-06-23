@extends('layouts.dash2')

@section('content')
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="icon" href="/img/logo_farmacia.png" />

    <meta name="theme-color" content="#000000" />

    <title>Como crear un CRUD con Laravel 10 y Bootstrap 5 </title>

    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])

  </head>

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
                     <h1>Puestos</h1>
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
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.puestos') }}">Puestos</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $puestos->descripcion }}</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-body">

                  @if(Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                      {{ Session::get('message') }}
                    </div>
                  @endif

                    <p class="h5">id:</p>
                    <p class="h6 mb-3">{{ $puestos->id }}</p>

                    <p class="h5">Existencia:</p>
                    <p class="h6 mb-3">{{ $puestos->descripcion }}</p>

                </div>

                <a href="{{ route('admin.puestos') }}" class="btn btn-warning mt-3">Volver</a>

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
          Desarrollado por Net Team</a>
      </div>
    </footer>

    <script type="text/javascript">

        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }

    </script>

  </body>
</html>
@endsection 