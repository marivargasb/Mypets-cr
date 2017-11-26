<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';


$fecha_actual = date("Y-m-d");
$id_usuario = $_GET['id'];
$id_lugar = $_GET['id_lugar'];
 
echo "usuario: ".$id_usuario ;

echo   "lugar: ".$id_lugar;

$ins = "INSERT INTO favoritos( id_lugar, id_usuario, estado, fecha) VALUES  ('$id_lugar', '$id_usuario', 'A', '$fecha_actual')";
 
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