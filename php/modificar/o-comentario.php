<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';


$fecha_actual = date("Y-m-d");
$id_comentario = $_GET['id'];
$mensaje = $_POST["mensaje"];




$query = "UPDATE comentario SET mensaje  =' $mensaje' ,fecha= '$fecha_actual' WHERE id_comentario = '$id_comentario' ";
$resultado = $conexion->query($query);

if($resultado){

    echo '<script> alert("MODIFICADO CORRECTAMENTE");
    window.history.go(-1);
    </script>';

}else{

    echo '<script> alert("ERROR AL MODIFICAR");
    window.history.go(-1);
    </script>';


}

