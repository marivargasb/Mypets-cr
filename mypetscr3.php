<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mi Lugar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos-footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>


    
   
  <!--  <link rel="stylesheet" href="css/estilos.css">
      HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<body class="layout-boxed skin-blue sidebar-mini  ">
    <div class="wrapper">
    
      <header class="main-header  ">


      <?php
  
  include 'C:\xampp\htdocs\Mypetscr\php\cn.php';
  
  session_start();
if(isset($_SESSION['id'])){
  header("Location: mypetscr.php");

  
  }

  
  echo "<script>\n";
  echo "var_id ='" .$id. "'\n";
  echo "</script>\n";
 
{
 ?>

        <!-- Logo -->
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>R</span>
          <!-- logo for regular state and mobile devices -->
         
          <span class="logo-lg"><b>Mypets</b> <label class="label label-danger" >CR</label></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <div class="navbar-custom-menu ">
            <ul class="nav navbar-nav">
  


          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa  fa-heart"></i>
        
              </a>
              <ul class="dropdown-menu">
                <li class="header">Favoritos recientes</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
               
                 
     
                  
                  
                                    <li><!-- start message -->
                                      <a href="lugar.php">
                                        <div class="pull-left">
                                          <img src="https://pbs.twimg.com/media/CnsHg1nWYAEFutg.png" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                    no disponible sin incio de seccion
                                         
                                        </h4>
 
                                      </a>
                                    </li>
                                    <!-- end message -->
                  
                 
                                  
                    <!-- end message -->
                  
      
                  </ul>
                </li>
                <li class="footer"><a href="#"> favoritos</a></li>
              </ul>
            </li>
   <!-- User Account: style can be found in dropdown.less -->
   <li class="dropdown user user-menu">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <img src="https://pbs.twimg.com/media/CnsHg1nWYAEFutg.png" class="user-image" alt="User Image">
     <span class="hidden-xs">Registrar</span>
   </a>
   <ul class="dropdown-menu">
     <!-- User image -->
     <li class="user-header">
       <img src="https://pbs.twimg.com/media/CnsHg1nWYAEFutg.png" class="img-circle" alt="User Image">

       <p>
     registrar
    
       </p>
     </li>
     <!-- Menu Body -->
     <li class="user-body">
       <div class="row">
  
         <div class="col-xs-12 text-center">
           <a href="sobre.php">Sobre Nosotros</a>
         </div>
       </div>
       <!-- /.row -->
     </li>
     <!-- Menu Footer-->
     <li class="user-footer">
   
       <div class="col-xs-12 text-center">
         <a href="registro.php" class="btn btn-info btn-flat">Sign </a>
       </div>
     </li>
   </ul>
 </li>
<!-- Control Sidebar Toggle Button -->
<li>
 <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>




<?php

  }
?>

</header>
<!-- Left side column. contains the logo and sidebar -->







  <!-- Content Wrapper. Contains page content -->
  <div class="content">
   
   <section class="content"> 
 
    
   
      <div class="row">
        
   
  
      <div class="row">


          <section class="col-lg-12 connectedSortable">
              



          
          
              <div class="box-body">


              <center>
              <div class="container ">
                  <div class="row">
                        <div class="col-md-12">
                          
                        <h1 class="mypetscr">Mypets <label class="label label-danger" >CR</label></h1>
                        <br>
                        <br>
                            <div  id="custom-search-input">
                                <div class="input-group col-md-12">
                                   
                                    <input id="busquedas"  type="text" class="form-control input-lg" placeholder="Buscar" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="button">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>


             
            </center>
                </br>
              </br>

            
                

               






                </div>


        
              </section>
                






  <!-- Left col -->
  <section class="col-lg-6 col-lg-offset-1 connectedSortable">
    


    <div class="box-body">






         <div class="container">
            <div class="row">


            <div id="datos">


            

            <?php


$query = "SELECT * FROM `lugar` ";
$resultado = $conexion->query($query);
while($rows = $resultado-> fetch_assoc()){

?>
                   
                        

                            
                         <div class="row">
                          <div class="col-sm-6 col-md-6">
                            <div class="thumbnail" >
                              <h3 class="text-center"><span class="label label-info"><?php echo $rows['categoria']; ?> </span>     <span class="label label-danger"><?php echo $rows['provincia']; ?></span></h3>
                            
                              <img src="data:imagine/jpg;base64,<?php echo base64_encode($rows['foto']);  ?>" class="img-responsive">
                              <div class="caption">
                                <div class="row">
                                  <div class="col-md-12 col-xs-12">
                                  <a href="lugar2.php?id_lugar= <?php echo $rows['id_lugar']  ?> "  > 
                                    <h3 class="text-center" >    </span>   <label class="badge  fa fa-paw  label-info"> <?php echo $rows['nombre']; ?> </label></h3>
                                    </a>
                                  </div>
                                  <div class="col-md-12 col-xs-12 price">
                                 
                                    <h4 class="text-center">
                                  <label>Correo:</label><?php echo $rows['correo']; ?> <label>Telefono:</label><?php echo $rows['telefono']; ?></h4>
                                  </div>
                                </div>
                                 
                             <p class="text-center"> <label>Descripcion:</label><?php echo $rows['descripcion']; ?></p>
                             <div class="row">
                                  <center>
                                  <div class="col-md-12">

 
                                    <button class="btn btn-success  submit-button " value="1" name ="boton"  > me gusta <span class="badge "> <?php echo $rows['me-gusta']  ?>  </span> </button>
                         

                                </div>
                              </center>
                            </div>
                                <p> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                   


                    
 <?php 
}

?>



            </div>
            








                    </div>



                </div>
                
            </div>
   


   </section>
   <!-- /.Left col -->
   <!-- right col (We are only adding the ID to make the widgets sortable)-->
   
   
   <section class=" col-lg-4 connectedSortable ">

  <!-- iCheck -->
  <div class="box box-success">
     
            <div class="box-header">
                <h1 class=" text-center"> <strong>FILTROS</strong></h1>
              </div>
              
              <div class="box-body   ">
    

               <center>
                <form action="php\obtener\buscar.php" method="POST" role="form">
                      <ul class="nav navbar-nav " >
                           
                  
                       
                          <div class="col-sm-12 col-md-12 text-center  caja">
                         
                       
                            <li class="dropdown align-text-bottom "><a href="#" class="dropdown-toggle li" data-toggle="dropdown" role="button">Categoria
                        <span class="caret"></span>

                        </a>
                      
                                <ul class="dropdown-menu">
                                
                                        <div class="checkbox">
                                            <label class="te">
                                                <input type="checkbox"  class="flat-red" checked name="categoria[]" value="Hotel">Hotel</label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="categoria[]" value="Restaurante">Restaurante</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="categoria[]" value="Aire Libre" >Aire Libre</label>
                                        </div>
                                                   
                                </ul>

                            
                            </li>
                        
                            </div>
                         
                         
                          <div class="col-sm-12 col-md-12   ">
                        
                            <hr>
                         
                          </div>

                        <div class="col-sm-12 col-md-12    caja1">
                      
                            <li class="dropdown "  href="#" ><a href="#" class="dropdown-toggle li1" data-toggle="dropdown" role="button"> Provincia
                        <span class="caret"></span>
                        
                        </a>
                                <ul class="dropdown-menu">
                                    
                                        <div class="checkbox">
                                            <label class="te" >
                                                <input type="checkbox" class="flat-red" checked  name="provincia[]" value="Nicoya">Nicoya</label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="te"  >
                                                <input type="checkbox" class="flat-red"  name="provincia[]" value="Guanacaste">Guanacaste</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="provincia[]" value="Puntarenas" >Puntarenas</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="provincia[]" value="San Jose" >San Jose</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="provincia[]" value="Alajuela" >Alajuela</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="provincia[]" value="Cartago" >Cartago</label>
                                        </div>
                                        <div class="checkbox ">
                                            <label class="te">
                                                <input type="checkbox" class="flat-red"  name="provincia[]" value="Limon" >Limon</label>
                                        </div>
                                   
                                        </ul>
                                      </li>  
                              
                                    </div>

                                   
                                      </ul>

                                      
                                  
                                  <div class="col-sm-12 col-md-12">
                                  <div class="checkbox">
                                    <label class="te" >
                                       <input type="checkbox" class="flat-red" checked  name="populares" value="mejores">Mas Populares</label>
                                      </div>

                                   
                                  </br>
                                      <button type="submit" class="btn btn-warning btn-lg">BUSCAR</button>
                                  </div>
                                    </form>
                                  </center>

     </div>
                              
     
      <!-- /.box-body -->
      <div class="box-footer text-center">
     VER TODOS <a href="mypetscr.php">IR</a>
      </div>
    </div>

  



          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
                <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div><!-- /. tools -->

              <i class="fa fa-map-marker"></i>
              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="map" style="height: 250px; width: 100%;  color: black;  "></div>
           
           
              <script>
      var customLabel = {
        restaurante: {
          label: 'R'
        },
        Hotel: {
          label: 'H'
        },
        AireLibre: {
          label: 'A'
        },
        Salud: {
          label: 'S'
        },
        Estetica: {
          label: 'E'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(9.984274,-84.248456),
          zoom: 7
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('respuesta.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var nombre = markerElem.getAttribute('nombre');
              var direccion = markerElem.getAttribute('direccion');
              var categoria = markerElem.getAttribute('categoria');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('latitud')),
                  parseFloat(markerElem.getAttribute('longitud')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = nombre
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = direccion
              infowincontent.appendChild(text);
              var icon = customLabel[categoria] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

            </div><!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
           <!-- ./col -->
              </div><!-- /.row -->
            </div>
          </div>
          <!-- /.box -->







   </section>


        </div>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 <!--Footer-->
 <footer class="footer1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-desc text-center">
                        <img src="http://superdevresources.com/images/super-dev-resources-logo.png" width="82" height="48" alt="">
                        <p>
                            <a href="/" rel="home" title="Super Dev Resources">Nuestro propocito es crear una red en donde todos podamos compartir<br>las mejores aventuras con tu mejor amigo <a href="sobre.php">Leer mas</a>
                        </p>
                    </div>
                </div>
              
         
                    <ul class="social ">
                <div class="container-fluid">
                    <div class="row">
                    <div class="sicon ">
                
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                        <div class="icon-circle">
                          <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </div>
                      </div>
                     
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                        <div class="icon-circle">
                          <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                      </div>
                      
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                        <div class="icon-circle">
                          <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
                        </div>
                      </div>
                      
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                        <div class="icon-circle">
                          <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                
                    </div>
                  </div>
                </div>
                    </ul>
               

            </div> <!--/.row--> 
        </div> <!--/.container--> 
    </div> <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
               <div class="pull-left"> Copyright © <a href="">Mypetscr</a>.  todos los derechos reservados.</div>
        
        </div>
    </div> <!--/.footer-bottom--> 
</footer>
    <!--/Footer-->
                    
    
  




  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      
      
      
      
      <!-- Inicio tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Perfil</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
</div>
<!-- ./wrapper -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKgL99QGHGEibwnzxvvO80HeE94NN3-NM&callback=initMap">
    </script>

<script type="text/javascript" src="js/buscar.js"></script>


<!-- jQuery 3  <script src="js/jquery-3.2.1.min.js"></script> -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>




<!-- iCheck 1.0.1  -->
<script  src="plugins/iCheck/icheck.min.js"></script>


<script>
    $(function () {

  
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
  
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })
  
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  
      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>


</body>
</html>