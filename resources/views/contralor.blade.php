<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Sistema-EstadisticoCJ</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
  <!-- Custom styles for this template --> 
  <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{ asset('css/administrador.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/select2/4.0.0/css/select2.css">
  <link rel="stylesheet" type="text/css" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">

</head>

<body>

<div id="app">

  <div class="d-flex" id="wrapper">

   <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">  <h5 class="text-white" style="text-align: center;"> Bienvenido -   {{ Auth::user()->name }} <span class="caret"></span> </h5> </div>
          <div class="row">
              <div class="col-md-12  offset-md-1 col-lg-12 col-sm-12">
                  <img src="{{ asset('/images/escudo.png') }}" class="escudo">
              </div>    
          </div>  
          <div class="list-group list-group-flush">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              

              <a class="nav-link menuMain active" id="v-pills-inicio-tab" data-toggle="pill" href="#v-pills-inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="false"><i class="fas fa-home"></i> Inicio</a>

             <!-- Menu con submenu modulos-->
              <li class="nav-item">
                  <a class="nav-link collapsed py-1 dropdown-toggle menuMain" href="#submenu2sub3" data-toggle="collapse" data-target="#submenu2sub3" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-align-justify"></i> Consulta-Modulos</a>
                  <div class="collapse" id="submenu2sub3" aria-expanded="false" aria-controls="v-pills-home">
                      <ul class="flex-column nav pl-4">
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-expedientes-tab" data-toggle="pill" href="#v-pills-expedientes" role="tab" aria-controls="v-pills-expedientes" aria-selected="false">
                              <i class="fas fa-university"></i>  Expedientes
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloUno-tab" data-toggle="pill" href="#v-pills-moduloUno" role="tab" aria-controls="v-pills-moduloUno" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - I
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloDos-tab" data-toggle="pill" href="#v-pills-moduloDos" role="tab" aria-controls="v-pills-moduloDos" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - II
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloTres-tab" data-toggle="pill" href="#v-pills-moduloTres" role="tab" aria-controls="v-pills-moduloTres" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - III
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloCuatro-tab" data-toggle="pill" href="#v-pills-moduloCuatro" role="tab" aria-controls="v-pills-moduloCuatro" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - IV
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloCinco-tab" data-toggle="pill" href="#v-pills-moduloCinco" role="tab" aria-controls="v-pills-moduloCinco" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - V
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloSeis-tab" data-toggle="pill" href="#v-pills-moduloSeis" role="tab" aria-controls="v-pills-moduloSeis" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - VI
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloSiete-tab" data-toggle="pill" href="#v-pills-moduloSiete" role="tab" aria-controls="v-pills-moduloSiete" aria-selected="false">
                              <i class="fas fa-university"></i>  Modulo - XII
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloOcho-tab" data-toggle="pill" href="#v-pills-moduloOcho" role="tab" aria-controls="v-pills-moduloOcho" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - VIII
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloNueve-tab" data-toggle="pill" href="#v-pills-moduloNueve" role="tab" aria-controls="v-pills-moduloNueve" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - IX
                              </a>
                          </li>
                           <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloDiez-tab" data-toggle="pill" href="#v-pills-moduloDiez" role="tab" aria-controls="v-pills-moduloDiez" aria-selected="false">
                              <i class="fas fa-university"></i>  Módulo - X
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
          <!-- Termina menu con submenu modulos-->

              <a class="nav-link menuMain" id="v-pills-estadisticas-tab" data-toggle="pill" href="#v-pills-estadisticas" role="tab" aria-controls="v-pills-estadisticas" aria-selected="false"><i class="fas fa-file-alt"></i> Generación de Estádisticas</a>

      
              <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i> 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                </form>                       
              Cerrar Sesion</a>
            </div>
          </div>

      </div>
      <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


     <!-- Menu nav -->
      <nav id="fondo" class="navbar navbar-expand-lg navbar-light bg-light border-bottom fondo">
        <button class="btn btn-danger" id="menu-toggle"><i class="fas fa-align-justify"></i></button>
            <div class="row">
              <div class="col-md-12 offset-md-1">
                <h5 class="text-white"> 
                 SISTEMA GESTOR DE VARIABLES ESTADISTICAS DEL PODER JUDICIAL DEL ESTADO DE TLAXCALA
                </h5>       
              </div>
            </div>  
      </nav>
      <!--Termina menu nav-->
      <!-- Etiqueta para los contenidos del menu Nav-->
      <div class="tab-content" id="v-pills-tabContent">
        <!-- Empieza contenido de inicio -->
        <div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
            <div class="container-fluid">
              <h1 class="mt-4">Bienvenidos</h1>
              <p> Al sistema de generación de estadísticas del <strong> Poder Judicial del Estado de Tlaxcala. </strong> </p>
    
              <inicio-component></inicio-component>

              <br> 
            </div>
        </div>
      <!-- Termina contenido de inicio-->



       <!-- Empieza formulario modulo I -->
      <div class="tab-pane fade" id="v-pills-expedientes" role="tabpanel" aria-labelledby="v-pills-expedientes-tab">

        <div class="alert alert-secondary text-center" role="alert">
          <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de expedientes, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
        </div>

        <div class="container">
         
         <expedientesadmin-component> </expedientesadmin-component> <br>
        
           <a href="{{ route('expedientes.pdf') }}" class="btn btn-danger"> Exportar PDF </a>

           <a href="{{ route('expedientes.xlsx') }}" class="btn btn-success"> Exportar Excel </a>
        
        </div>
      </div>
     
      <!-- Termina formulario modulo I -->



      <!-- Empieza formulario modulo I -->
        <div class="tab-pane fade" id="v-pills-moduloUno" role="tabpanel" aria-labelledby="v-pills-moduloUno-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulounoactualizar-component> </modulounoactualizar-component> <br>

              <a href="{{ route('modulouno.xlsx') }}" class="btn btn-success"> Exportar Excel </a>
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo I -->

      <!-- Empieza formulario modulo II -->
        <div class="tab-pane fade" id="v-pills-moduloDos" role="tabpanel" aria-labelledby="v-pills-moduloDos-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulodosc-component> </modulodosc-component> <br>

      
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo II -->

      <!-- Empieza formulario modulo III -->
        <div class="tab-pane fade" id="v-pills-moduloTres" role="tabpanel" aria-labelledby="v-pills-moduloTres-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulotresc-component> </modulotresc-component> <br>

     
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo III -->

            <!-- Empieza formulario modulo IV -->
        <div class="tab-pane fade" id="v-pills-moduloCuatro" role="tabpanel" aria-labelledby="v-pills-moduloCuatro-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulocuatroc-component> </modulocuatroc-component> <br>

  
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo IV -->


            <!-- Empieza formulario modulo V -->
        <div class="tab-pane fade" id="v-pills-moduloCinco" role="tabpanel" aria-labelledby="v-pills-moduloCinco-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulocincoc-component> </modulocincoc-component> <br>
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo V -->


      <!-- Empieza formulario modulo VI -->
        <div class="tab-pane fade" id="v-pills-moduloSeis" role="tabpanel" aria-labelledby="v-pills-moduloSeis-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <moduloseisc-component> </moduloseisc-component> <br>
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo VI -->


           <!-- Empieza formulario modulo VII -->
        <div class="tab-pane fade" id="v-pills-moduloSiete" role="tabpanel" aria-labelledby="v-pills-moduloSiete-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulosietec-component> </modulosietec-component> <br>
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo VII -->


           <!-- Empieza formulario modulo VIII -->
        <div class="tab-pane fade" id="v-pills-moduloOcho" role="tabpanel" aria-labelledby="v-pills-moduloOcho-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulounoactualizar-component> </modulounoactualizar-component> <br>
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo VIII -->


           <!-- Empieza formulario modulo IX -->
        <div class="tab-pane fade" id="v-pills-moduloNueve" role="tabpanel" aria-labelledby="v-pills-moduloNueve-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulonuevec-component> </modulonuevec-component> <br>
          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo IX -->



      <!-- Empieza formulario modulo X -->
        <div class="tab-pane fade" id="v-pills-moduloDiez" role="tabpanel" aria-labelledby="v-pills-moduloDiez-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de modulo X, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
              <modulodiezactualizar-component> </modulodiezactualizar-component> <br> 

              <a href="{{ route('modulodiez.xlsx') }}" class="btn btn-success"> Exportar Excel </a> <br>

          
          </div>
    
      </div>
     
      <!-- Termina formulario modulo X -->

       <!-- Empieza formulario de estadisticas -->
      <div class="tab-pane fade" id="v-pills-estadisticas" role="tabpanel" aria-labelledby="v-pills-estadisticas-tab">

        <div class="alert alert-secondary text-center" role="alert">
          <font size="4"> ACCIONES: </font>  <strong> Generación </strong> de reportes estádisticos de expedientes, <strong> POR MODULOS DE CAPTURA </strong> y visualización de <strong> información de modulos </strong>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-md-6">
              <div class="card" style="width: 26rem;">
                <div id="piechart" style="width: 900px; height: 140px;"></div>
                <div class="card-body">
                  <h5 class="card-title">Reporte Expedientes</h5>
                  <p class="card-text">El siguiente reporte marca el total de mujeres y hombres dentro de los registros de expedientes.</p>
                  <a href="#" class="btn btn-danger">Descargar reporte</a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card" style="width: 26rem;">
                <div id="piechart2" style="width: 900px; height: 140px;"></div>
                <div class="card-body">
                  <h5 class="card-title">Reporte Expedientes</h5>
                  <p class="card-text">El siguiente reporte marca el total de mujeres dentro de los registros de expedientes.</p>
                  <a href="#" class="btn btn-danger">Descargar reporte</a>
                </div>
              </div>
            </div>
          </div> <br>

           <div class="row">
            <div class="col-md-6">
              <div class="card" style="width: 26rem;">
                <div id="piechart3" style="width: 900px; height: 140px;"></div>
                <div class="card-body">
                  <h5 class="card-title">Reporte Expedientes</h5>
                  <p class="card-text">El siguiente reporte marca el total de mujeres y hombres dentro de los registros de expedientes.</p>
                  <a href="#" class="btn btn-danger">Descargar reporte</a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card" style="width: 26rem;">
                <div id="piechart4" style="width: 900px; height: 140px;"></div>
                <div class="card-body">
                  <h5 class="card-title">Reporte Expedientes</h5>
                  <p class="card-text">El siguiente reporte marca el total de mujeres dentro de los registros de expedientes.</p>
                  <a href="#" class="btn btn-danger">Descargar reporte</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Termina formulario estadisticas -->


    <!-- /#wrapper -->
  </div>
<!--Cierre de div="app" -->
</div>

</div> </div>



<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Mujeres',     11],
      ['Hombres',      8],
    ]);

    var options = {
      title: 'Reporte de expedientes'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Mujeres',     11],
      ['Hombres',      8],
    ]);

    var options = {
      title: 'Reporte de expedientes'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Mujeres',     11],
      ['Hombres',      8],
    ]);

    var options = {
      title: 'Reporte de expedientes'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Mujeres',     11],
      ['Hombres',      8],
    ]);

    var options = {
      title: 'Reporte de expedientes'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

    chart.draw(data, options);
  }
</script>


<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
 

</body>

</html>
