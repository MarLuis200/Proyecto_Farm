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

    <title>Ventas</title>

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
                     <h1>Ventas</h1>
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
            <li class="breadcrumb-item"><a href="{{ route('admin.ventas') }}">Ventas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualizar</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Actualizar</h2></div>

              </div>

                <div class="panel-body">

                <section class="example mt-4">

                    <form method="POST" action="{{ route('admin.ventas.update',$venta->id) }}" role="form" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @include('admin.venta.frm.prt')

                    </form>

                    </section>

                </div>

              </div>

          </div>

        </div>

      </div>

      </div>

    <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por Net Team</a>
      </div> 
      </div> 
    </footer>


  </body>
</html>

@endsection 

