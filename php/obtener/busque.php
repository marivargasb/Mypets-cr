<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$salida ="";
$query  = "SELECT * FROM `lugar`ORDER BY id_lugar";

if(isset($_POST['busquedas'])){
 
$busquedas =  $_POST['busquedas'];
$query  =  "SELECT * FROM `lugar`WHERE nombre LIKE '%$busquedas%' OR  categoria LIKE '%$busquedas%' OR   provincia LIKE '%$busquedas%' ";


}
$resultado = $conexion->query($query);

if(mysqli_num_rows($resultado )> 0){

    
    
while($fila = $resultado  ->fetch_assoc()){

    $salida.= "  <div class='row'>
    <div class='col-sm-6 col-md-6'>
      <div class='thumbnail' >
        <h3 class='text-center'><span class='label label-info'>" .$fila['categoria'].   " <span class='label label-danger'> ".$fila['provincia']."</span></h3>
      
        <img src=' data:imagine/jpg;base64," .base64_encode($fila['foto'])."   class='img-responsive'>
        <div class='caption'>
          <div class='row'>
            <div class='col-md-12 col-xs-12'>
            <a href='lugar.php   > 
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
            <div class='col-md-12'>

                  <button class='btn btn-success  submit-button ' value='1' name ='boton'   > me gusta   </button>

                 <a href='php\guardar\g-favoritos.php'>  <button class='btn btn-warning ' type='button'  > Agregar </button> </a>

          </div>
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
