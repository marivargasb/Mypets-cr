<?php
$conexion = mysqli_connect("localhost","root","","mypetscr");

if(!$conexion){

    echo '<script> alert(" ERROR DE CONEXION"); 
    window.history.go(-1);
    </script>';
}else{



}