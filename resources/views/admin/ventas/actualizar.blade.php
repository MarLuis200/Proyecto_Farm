<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="icon" href="/img/logo_farmacia.png" />

    <meta name="theme-color" content="#000000" />

<<<<<<< HEAD
    <title>Puestos</title>

=======
<<<<<<< HEAD
    <title>Puestos</title>

=======
>>>>>>> 30a0bd98a6c3272d6fb296b7ea25d5d8235c5ef7
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])

  </head>

<<<<<<< HEAD
  <body>

=======
<<<<<<< HEAD
  <body>

  <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
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

    <div class="pccp mt-5 mb-3" align="center">
              <!-- P -->
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              <!-- End P -->
    </div>


=======
  <body> 
>>>>>>> 30a0bd98a6c3272d6fb296b7ea25d5d8235c5ef7
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">

<<<<<<< HEAD
=======
              <h1 style="font-size: 28px;" class=" text-center">.... </h1>
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295

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
<<<<<<< HEAD
=======
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
<<<<<<< HEAD
                          <li><a href="{{ route('admin/ventas') }}">Ventas</a></li>
=======
                          <li><a href="{{ route('admin/ventas') }}">Administrador</a></li>
>>>>>>> 30a0bd98a6c3272d6fb296b7ea25d5d8235c5ef7
                        </ul>
                      </nav>
                  </div>
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">
<<<<<<< HEAD
=======

          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="{{ route('admin/ventas') }}">Ventas</a>
                  </li>
              </ul>
            </div>
          </div>

>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/ventas') }}">Ventas</a></li>
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

                    <form method="POST" action="{{ route('admin/ventas/update',$venta->id) }}" role="form" enctype="multipart/form-data">
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
 
>>>>>>> 30a0bd98a6c3272d6fb296b7ea25d5d8235c5ef7
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @include('admin.ventas.frm.prt')

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
<<<<<<< HEAD
          Desarrollado por <a href="http://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div>
=======
          Desarrollado por Net Team</a>
<<<<<<< HEAD
      </div>
=======
      </div> 
>>>>>>> 30a0bd98a6c3272d6fb296b7ea25d5d8235c5ef7
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
    </footer>


  </body>
</html>
<<<<<<< HEAD
@endsection 
=======
>>>>>>> 80c863b8023e8aa58e5015033694afa22118f295
