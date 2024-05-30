<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    <title>Proveedores</title>

    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])   

  </head>

  <body> 

    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
        <div class="container">
          <a class="navbar-brand" href="https://nubecolectiva.com">
            <img src="/img/logo_farmacia.png" class="img-fluid" width="110" height="110" alt="Nombre de la Marca">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          
        </div>
      </nav>
    </header>

      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">

              <h1 style="font-size: 28px;" class=" text-center">.</h1>

              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1>Proveedores</h1>
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
                          <li><a href="{{ route('admin/proveedores') }}">Administrador</a></li>
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
                    <a href="{{ route('dashboard') }} " class="btn btn-secondary"> Proveedores</a>
                  </li>
                  
                  <li class="list-group-item">
                    Opción 1
                  </li>
                  <li class="list-group-item">
                    Opción 2
                  </li>
                  <li class="list-group-item">
                    Opción 3
                  </li>
                  <li class="list-group-item">
                    Opción 4
                  </li>
                  <li class="list-group-item">
                    Opción 5
                  </li>
                  
              </ul>
            </div>
          </div>
        
            <div class="col-md-10">

        
        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                          
                    
              </div>
                
                <div class="panel-body">

                  @if(Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                      {{ Session::get('message') }}
                    </div>
                  @endif

                
                  <a href="{{ route('admin/proveedores/crear') }}" class="btn btn-success mt-4 ml-3">  Crear
                  </a>
                                  
                                  <section class="example mt-4">
                                      
                                    <div class="table-responsive">

                                      <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                          <tr>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Imagen</th>
                                            <th>Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($proveedores as $prov)
                                          <tr>
                                            <td class="v-align-middle">{{$prov->nombre}}</td>
                                            <td class="v-align-middle">{{$prov->direccion}}</td>
                                            <td class="v-align-middle">{{$prov->telefono}}</td>
                                            <td class="v-align-middle">{{$prov->correo}}</td>
                                            <td class="v-align-middle">{{$prov->stock}}</td>
                                            <td class="v-align-middle">
                                              <img src="{!! asset("uploads/$prov->img") !!}" width="30" class="img-responsive">
                                            </td>
                                            <td class="v-align-middle">

                                              <form action="{{ route('admin/proveedores/eliminar',$prov->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                                                <a href="{{ route('admin/proveedores/detalles',$prov->id) }}" class="btn btn-dark">Detalles</a>                                         
                                                <a href="{{ route('admin/proveedores/actualizar',$prov->id) }}" class="btn btn-primary">Editar</a>          

                                                <button type="submit" class="btn btn-danger">Eliminar</button>

                                              </form>                             
                                                
                                            </td>                                                 
                                          </tr>                                          
                                          @endforeach
                                        </tbody>
                                      </table>

                                    </div>
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
        </div>

    <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por equipo Net Team</a>
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