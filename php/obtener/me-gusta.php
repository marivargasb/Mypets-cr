<?php

include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$id = $_GET['id'];
$ids = $_GET['id_lugar'];


$verificar = mysqli_query($conexion, "SELECT * FROM `lugar` WHERE id_lugar = '$ids' " );


if(mysqli_num_rows($verificar)> 0){

if ($row = $verificar->fetch_row()) {
    
    $likes = ($row[12]);

     }

    }


$verificar_like = mysqli_query($conexion, "SELECT * FROM `me-gusta` WHERE id_lugar = '$ids'  and id_usuario = '$id' " );


if(mysqli_num_rows($verificar_like)> 0){


 
  $valor =  $likes +1 ;


    $query = "UPDATE `lugar` SET   `me-gusta`  = '$valor' WHERE id_lugar = '$ids'";
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






}else{




    $insertar = " INSERT INTO `me-gusta`( `id_lugar`, `id_usuario`) VALUES ('$ids' , '$id' )";
    
    // EJECUTAR CONSULTA
    $resultado = mysqli_query($conexion, $insertar);
    if(!$resultado){
    
    
        echo '<script> alert(" ERROR AL REGISTRAR AL megusra");
        window.history.go(-1);
        </script>';
    }else{
    
        $valor =  $likes +1 ;
        $querys = "UPDATE `lugar` SET   `me-gusta`  = '$valor' WHERE id_lugar = '$ids'";
        $resultados = $conexion->query($querys);
        
        if(!$resultados){
            
            
                echo '<script> alert(" ERROR AL REGISTRAR .....");
                window.history.go(-1);
                </script>';
            }else{ 
            
            echo '<script> alert("  REGISTRAR AL megusra");
            window.history.go(-1);
            </script>';
            
            
            
             }
    }
    

    
}