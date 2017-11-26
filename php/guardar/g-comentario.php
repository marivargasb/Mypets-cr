<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';


$fecha_actual = date("Y-m-d");
$id_usuario = $_GET['id'];
$id_lugar = $_GET['id_lugar'];
$mensaje = $_POST["mensaje"];

$ins = "INSERT INTO comentario( id_lugar, id_usuario, mensaje, fecha, estado) VALUES  ('$id_lugar', '$id_usuario','$mensaje' ,'$fecha_actual','inactivo')";
 
 $result= mysqli_query($conexion, $ins);
 if(!$result){
 
     echo '<script> alert(" ERROR");
     window.history.go(-1);
     </script>';
 }else{
 
    echo '<script> 
    window.history.go(-1);
    </script>';
 } 