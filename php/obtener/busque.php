<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$salida ="";
$query  = "SELECT * FROM `lugar`ORDER BY id_lugar";

if(isset($_POST['busquedas'])){
 

$busquedas =  $_POST['busquedas'];

echo $busquedas;

$query  =  "SELECT * FROM `lugar`WHERE nombre LIKE '%$busquedas%' OR  categoria LIKE '%$busquedas%' OR   provincia LIKE '%$busquedas%' ";


}
$resultado = $conexion->query($query);

if(mysqli_num_rows($resultado )> 0){

  $id = $_POST['id'];
    
    
while($fila = $resultado  ->fetch_assoc()){
    $id_lugar = $fila['id_lugar'];  

    $salida.= "
    <div class='row'>
    <div class='col-sm-6 col-md-6'>
      <div class='thumbnail' >
        <h3 class='text-center'><span class='label label-info'>" .$fila['categoria'].   " </span>     <span class='label label-danger'> ".$fila['provincia']."</span></h3>
      
        <img src='https://media-cdn.tripadvisor.com/media/photo-s/0e/57/99/f2/ananda-hotel-boutique.jpg'   class='img-responsive'>
        <div class='caption'>
          <div class='row'>
            <div class='col-md-12 col-xs-12'>
            <a href='lugar.php?id= ".$id." &id_lugar= " .$id_lugar."  '   > 
              <h3 class='text-center' >    </span>   <label class='badge  fa fa-paw  label-info'> " .$fila['nombre']." </label></h3>
              </a>
            </div>
            <div class='col-md-12 col-xs-12 price'>
           
              <h4 class='text-center'>
            <label>Correo:</label>" .$fila['correo']." <label>Telefono:</label> ".$fila['telefono']."</h4>
            </div>
          </div>
           
       <p class='text-center'> <label>Descripcion:</label>".$fila['descripcion']."</p>
       <div class='row'>
            <center>
            <div class='col-md-12'>";

               

            $verificar_me = mysqli_query($conexion, "SELECT * FROM `me-gusta` WHERE id_lugar = '$id_lugar' and id_usuario = '$id' " );
            
             if(mysqli_num_rows($verificar_me)> 0){
              if ($ro = $verificar_me->fetch_row()) {
                $id_gusta = ($ro[0]);
                $likes = ($ro[3]);
           
                 }
                 $salida.= " <a href='php/borrar/b-like.php?id=".$id." &id_lugar=".$id_lugar." '>  <button class='btn btn-danger  ' type='button'  > QUITAR <span class='badge '> " .$fila['me-gusta']."  </span> </button> </a>";
                  
                }else{
                    $salida.= " <a href='php/obtener/me-gusta.php?id=".$id." &id_lugar=".$id_lugar."'>  <button class='btn btn-success   ' type='button'  > ME GUSTA <span class='badge '> " .$fila['me-gusta']."  </span> </button> </a>";
                    
                }

                $verificar = mysqli_query($conexion, "SELECT * FROM favoritos WHERE id_usuario = '$id' and id_lugar = '$id_lugar' " );
                
                  if(mysqli_num_rows($verificar)> 0){


               $salida.= "  <button class='btn btn-warning ' type='button'  > Agregado </button>";

                  }else{

               $salida.= " <a href='php\guardar\g-favoritos.php?id= ".$id." &id_lugar= " .$id_lugar." '>  <button class='btn btn-warning ' type='button'  > Agregar </button> </a>";

                  }


  $salida.= "        </div>
        </center>
      </div>
          <p> </p>
        </div>
      </div>
    </div>
  </div>

  
  
    
    ";

}


}

echo $salida;


