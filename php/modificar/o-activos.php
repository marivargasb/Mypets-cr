<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$id_comentario = $_GET['id'];
$lugar = $_GET['lugar'];



$query = "UPDATE comentario SET estado  ='activo'  WHERE id_comentario = '$id_comentario' ";
$resultado = $conexion->query($query);

if($resultado){

  //echo $id_comentario . $lugar ;
    
   $extra = '..\..\lugar.php';
          
     header("Location: $extra?id_lugar= $lugar");

}else{

    echo '<script> 
    window.history.go(-1);
    </script>';


}