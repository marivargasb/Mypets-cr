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
  <link rel="stylesheet" href="css/estilos-footer.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="layout-boxed skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">


  <?php

include 'C:\xampp\htdocs\Mypetscr\php\cn.php';


session_start();
if(isset($_SESSION['id'])){
  
    $id = $_SESSION['id'];

   
  
  }else{
  
    header("Location: registro.php");
  
  }


$query = "SELECT * FROM usuarios WHERE id_usuarios = '$id' ";
$resultado = $conexion->query($query);
if($row = $resultado-> fetch_assoc()){
?>



    <!-- Logo -->
    <a href="mypetscr.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>C</b>R</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Mypets</b>CR</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
           <!-- Messages: style can be found in dropdown.less-->
        



<?php
$cont = 0;
$id_usuario = $row['id_usuarios'];
$query = "SELECT DISTINCT us.id_usuarios, us.nombre, us.foto , cm.* ,lg.id_lugar 
FROM lugar lg, comentario cm , usuarios us WHERE us.id_usuarios = cm.id_usuario  and cm.estado = 'inactivo'  and cm.id_lugar = lg.id_lugar  and lg.id_usuario = $id_usuario ";
  $resultados = $conexion->query($query);

  while($rowsts = $resultados-> fetch_assoc()){
   $cont++;

  }

  
?>
<li class="dropdown messages-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-envelope-o"></i>
    <span class="label label-success"> <?php 
     
    echo  $cont;
    ?></span>
</a>
<ul class="dropdown-menu">
  <li class="header">You have  messages</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <ul class="menu">
<?php
         $id_usuario = $row['id_usuarios'];
         $query = "SELECT DISTINCT us.id_usuarios, us.nombre, us.foto , cm.* ,lg.id_lugar 
         FROM lugar lg, comentario cm , usuarios us WHERE us.id_usuarios = cm.id_usuario  and cm.estado = 'inactivo'  and cm.id_lugar = lg.id_lugar  and lg.id_usuario = $id_usuario ";
           $resultado = $conexion->query($query);         
                 while($rowst = $resultado-> fetch_assoc()){
                  
                  $cont++;
                   ?>

                   
<li><!-- start message -->
<a href="php\modificar\o-activos.php?id= <?php echo $rowst['id_comentario'] ?> &lugar= <?php echo $rowst['id_lugar']  ?>">
  <div class="pull-left">
    <img src="data:imagine/jpg;base64,<?php echo base64_encode($rowst['foto']);  ?>" class="img-circle" alt="User Image">
  </div>
  <h4>
  <?php  echo $rowst['nombre']; ?>
    <small><i class="fa fa-clock-o"></i>  <?php  echo $rowst['fecha']; ?></small>
  </h4>
  <p> <?php  echo $rowst['mensaje']; ?></p>
</a>
</li>

                    <!-- end message -->
                    <?php } ?>
                  
                  </ul>
                </li>
                <li class="footer"><a href="form_lugar.php"> Mensajes</a></li>
              </ul>
            </li>

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


                  
                 <?php


$id_usuario = $row['id_usuarios'];
$query = "SELECT  lg.id_lugar , lg.nombre, lg.foto , lg.descripcion, lg.categoria , lg.provincia , fv.id_lugar, fv.id_usuario , fv.id_favoritos
FROM lugar lg, favoritos fv WHERE lg.id_lugar = fv.id_lugar and fv.id_usuario = $id_usuario  ORDER BY  id_usuario  DESC LIMIT 5";

                  $resultado = $conexion->query($query);
               while($rows = $resultado-> fetch_assoc()){

                 ?>


                  <li><!-- start message -->
                    <a href="lugar.php">
                      <div class="pull-left">
                        <img src="data:imagine/jpg;base64,<?php echo base64_encode($rows['foto']);  ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                      <?php  echo $rows['nombre']; ?> 
                        <small><i class="fa fa-clock-o"></i> fecha</small>
                      </h4>
                      <p>  <?php  echo $rows['categoria']; ?> , <?php  echo $rows['provincia']; ?></p>
                    </a>
                  </li>
                  <!-- end message -->

                  <?php } ?>
              
    
                </ul>
              </li>
              <li class="footer"><a href="#"> Mensajes</a></li>
            </ul>
          </li>
 
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="data:imagine/jpg;base64,<?php echo base64_encode($row['foto']);  ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php  echo $row['nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="data:imagine/jpg;base64,<?php echo base64_encode($row['foto']);  ?>" class="img-circle" alt="User Image">

                <p>
                <?php  echo $row['nombre']; ?>
                  <small> miembro desde: <?php  echo $row['nacimiento']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="favoritos.php">Favoritos</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="form_lugar.php">Editar</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="sobre.php">Sobre Nosotros</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="perfil3.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="php\obtener\cerrar.php" class="btn btn-default btn-flat">Sign out</a>
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
</header>
<!-- Left side column. contains the logo and sidebar -->




<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="data:imagine/jpg;base64,<?php echo base64_encode($row['foto']);  ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php  echo $row['nombre']; ?></p>
                </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      
   
        <li class="header">LABELS</li>
        <li><a href="mypetscr.php"><i class="fa fa-share text-red"></i> <span>Regresar</span></a></li>
        <li><a href="inicio.php"><i class="fa fa-home text-yellow"></i> <span>inicio</span></a></li>
        <li><a href="favoritos.php"><i class="fa fa-th  text-aqua"></i> <span>Favoritos</span></a></li>
        <li><a href="perfil3.php"><i class="fa fa-cog text-red"></i> <span>Editar Perfil</span></a></li>
        <li><a href="sobre.php"><i class="fa fa-file text-yellow"></i> <span>Sobre Notros</span></a></li>
        <li><a href="php\obtener\cerrar.php"><i class="fa fa-sign-out text-aqua"></i> <span>Cerrar Sesion</span></a></li>



        <li class="treeview">
     <a href="#">
       <i class="fa fa-files-o text-red "></i> <span>Configuracion</span>
       <span class="pull-right-container">
         <i class="fa fa-angle-left pull-right"></i>
       </span>
     </a>
        <?php

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM lugar WHERE id_usuario = $id " );


if(mysqli_num_rows($verificar_usuario)> 0){

?>

     <ul class="treeview-menu">
       <li><a href="form_lugar.php"><i class="fa fa-circle-o"></i> Editar Pagina</a></li>
       <li><a href="lugar.php"><i class="fa fa-circle-o"></i> Pagina Online</a></li>
     </ul>
  

<?php
}else{
?>


     <ul class="treeview-menu">
       <li><a href="form_lugar2.php"><i class="fa fa-circle-o"></i> ACTIVAR PAGINA</a></li>
    
     </ul>
  

<?php  
}
?>

</li>
      
  
    </section>
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CONFIGURACION
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lugar</li>
      </ol>
    </section>


    

    <!-- Main content -->
   <section class="content"> 
 
    
   
      <div class="row">
        

      <div class="row">

      
  <?php



$query = "SELECT * FROM lugar WHERE id_usuario = '$id' ";
$resultado = $conexion->query($query);
if($rows = $resultado-> fetch_assoc()){
?>
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
         
         
         
          <!-- quick email widget -->
        
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">CONFIGURACION DEL LUGAR</h3>
                  <!-- tools box -->
                 
                  <!-- /. tools -->
                </div>
                <div class="box-body">

             
                       <form action="php\modificar\o-lugar.php?id = <?php $id ?>" method="post" enctype="multipart/form-data">
          
                  
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nombre del negocio</label>
                            <input type="text" class="form-control" name ="nombre" id="nombre" aria-describedby="emailHelp" placeholder="nombre"  value=" <?php  echo $rows['nombre']; ?>">
                            <small id="emailHelp" class="form-text text-muted">Este sera el nombre que veran los usuarios</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Correo electronico</label>
                            <input type="email" class="form-control"    name ="correo"  id="correo" placeholder="ejemplo: algo@ejemplo.com"  value=" <?php  echo $rows['correo']; ?>">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputPassword1">Pagina Web</label>
                            <input type="text" class="form-control"    name ="web"  id="web" placeholder="ejemplo: algo@ejemplo.com"  value=" <?php  echo $rows['web']; ?>">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputPassword1">Telefono</label>
                            <input type="text" class="form-control"     name ="telefono" id="telefono" placeholder="ejemplo: 506+8888888"  value=" <?php  echo $rows['telefono']; ?>">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleSelect1">Categoria</label>
                            <select class="form-control"    name ="categoria"  id="categoria"  value=" <?php  echo $rows['categoria']; ?>">
                              <option>Hotel</option>
                              <option>Restaurante</option>
                              <option>Salud</option>
                              <option>Aire Libre</option>
                              <option>Estetica</option>
                            </select>
                          </div>
                           <div class="form-group">
                            <label for="exampleSelect1">Provincia</label>
                            <select class="form-control"    name ="provincia"  id="provincia"  value=" <?php  echo $rows['provincia']; ?>">
                              <option>Nicoya</option>
                              <option>Guanacaste</option>
                              <option>Pultarenas</option>provincia
                              <option>San Jose</option>
                              <option>Alajuela</option>
                               <option>Cartago</option>
                                <option>Limon</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Direccion</label>
                            <textarea class="form-control"    name ="direccion"  id="direccion" rows="3"  ><?php  echo $rows['direccion']; ?></textarea>
                          </div>
                          
                          
                            <div class="form-group">
                            <label for="exampleTextarea">Descripcion</label>
                            <textarea class="form-control"    name ="descripcion"  id="descripcion" rows="3"  ><?php  echo $rows['descripcion']; ?></textarea>
                          </div>
                          
                          <div class="form-group">
                          <label for="exampleInputFile">Fotos de perfil</label>
                          <img  src="data:imagine/jpg;base64,<?php echo base64_encode($rows['foto']);  ?>"  class=" col-lg-2 col-sm-3 col-xs-3 col-md-2 img-rounded " >
                          <input type="file" class="form-control-file" name="foto" value="<?php echo base64_encode($rows['foto']);  ?>" >
                          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                          
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              ACEPTO LAS CONDICIONES
                            </label>
                          </div>
        
                              <button  id="btnGuardar"  type="submit"   class="btn btn-danger" >EDITAR</button>
 
                   
                  </form>
                </div>
              
              </div>

   
     

        </section>

          
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        
        <section class="col-lg-5 connectedSortable">

       
       
       
       
       <!-- Calendar -->
     <div class="box box-solid bg-green-gradient">
        <div class="box-header">
          <i class="fa fa-calendar"></i>
          <h3 class="box-title">Calendar</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <!-- button with a dropdown -->
            <div class="btn-group">
              <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
              <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="#">Add new event</a></li>
                <li><a href="#">Clear events</a></li>
                <li class="divider"></li>
                <li><a href="#">View calendar</a></li>
              </ul>
            </div>
            <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"></div>
        </div><!-- /.box-body -->
        <div class="box-footer text-black">
          <div class="row">
            <div class="col-sm-6">
              <!-- Progress bars -->
    
            
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
      </div><!-- /.box -->



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
                  <div id="world-map" style="height: 250px; width: 100%;"></div>
                </div><!-- /.box-body-->
                <div class="box-footer no-border">
                  <div class="row">
               <!-- ./col -->
                  </div><!-- /.row -->
                </div>
              </div>
              <!-- /.box -->

              
              <!-- Chat box -->
              <div class="box box-success">
                  <div class="box-header">
                    <i class="fa fa-comments-o"></i>
                    <h3 class="box-title">Chat</h3>
                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                      <div class="btn-group" data-toggle="btn-toggle" >
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="box-body chat" id="chat-box">
                 
                  <?php

                    $id_lugar =  $rows['id_lugar'];
                    $id_usuario = $row['id_usuarios'];
                 $query = "SELECT  cm.* ,us.nombre, us.foto , us.id_usuarios
                 FROM comentario cm, usuarios us WHERE  us.id_usuarios = '$id_usuario' and cm.id_lugar =  '$id_lugar' ";
                    $resultado = $conexion->query($query);

                while($rowss = $resultado-> fetch_assoc()){
                           
                        ?>

                 




                    <!-- chat item -->
                    <div class="item">
                      <img  src="data:imagine/jpg;base64,<?php echo base64_encode($rowss['foto']);  ?>" alt="user image" class="offline"/>
                      <p class="message">
                        <a href="#" class="name">
                          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $rowss['fecha'] ?></small>
                          <?php echo $rowss['nombre'] ?>
                        </a>
                        <?php echo $rowss['mensaje'] ?>
                      </p>
                    </div><!-- /.item -->

                <?php } ?>




                  </div><!-- /.chat -->
                  <div class="box-footer">
                    <div class="input-group">
                      <input class="form-control" placeholder="Type message..."/>
                      <div class="input-group-btn">
                        <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box (chat box) -->



                <?php
             }
            ?>
  
       
 <?php 
}
?>
       
       

        </section>
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
                        <a href="/" rel="home" title="Super Dev Resources">Super Dev Resources</a> is a popular blog for finding<br>awesome free app and web development resources. <a href="/about/">Learn More</a>
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
           


            <nav class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="input-group input-group-md">
                  <input type="text" class="form-control" placeholder="Email Address">
                  <span class="input-group-addon">Subscribe</span>
                </div>
            </nav>
        </div> <!--/.row--> 
    </div> <!--/.container--> 
</div> <!--/.footer-->

<div class="footer-bottom">
    <div class="container">
        <div class="pull-left"> Copyright © <a href="">Rizwan Akram</a>.  All right reserved.</div>
    
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
      <!-- Home tab content -->
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
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

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
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
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
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
