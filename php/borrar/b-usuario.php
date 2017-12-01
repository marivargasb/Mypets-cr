
<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';




$id= $_GET['id'];


$verificar_usuario = mysqli_query($conexion, " SELECT * FROM `usuarios` WHERE id_usuarios = '$id' " );


if(mysqli_num_rows($verificar_usuario)> 0){
 

/*   lugar        */

$verificar_lugar = mysqli_query($conexion, " SELECT * FROM `lugar` WHERE id_usuario = '$id' " );
   

if(mysqli_num_rows($verificar_lugar)> 0){
    

if ($row = $verificar_lugar->fetch_row()) {
    $id_lugar = ($row[0]);

     }

/*  comentario  */

  $verificar_comentario = mysqli_query($conexion, "SELECT * FROM `comentario` WHERE id_lugar  = '$id_lugar' " );
     
  
if(mysqli_num_rows($verificar_comentario)> 0){
      

    
$query = "DELETE FROM `comentario` WHERE id_lugar =  '$id_lugar' ";
$resultado = $conexion->query($query);



    }

/*  favoritos  */

$verificar_favoritos = mysqli_query($conexion, "SELECT * FROM `favoritos` WHERE id_lugar = '$id_lugar' " );
    
 
if(mysqli_num_rows($verificar_favoritos)> 0){
     

   
$query = "DELETE FROM `favoritos` WHERE id_lugar =  '$id_lugar' ";
$resultado = $conexion->query($query);



   }  

  /*   usuario comentario       */ 



  $verificar_comentarioU = mysqli_query($conexion, "SELECT * FROM `comentario` WHERE id_usuario  = '$id' " );
  

if(mysqli_num_rows($verificar_comentarioU)> 0){
   

 
$query = "DELETE FROM `comentario` WHERE id_usuario  = '$id' ";
$resultado = $conexion->query($query);

}

  /*   usuario favoritos      */ 


  $verificar_favoritosU = mysqli_query($conexion, "SELECT * FROM `favoritos` WHERE id_usuario = '$id' " );
  

if(mysqli_num_rows($verificar_favoritosU)> 0){
   

 
$query = "DELETE FROM `favoritos` WHERE id_usuario = '$id' ";
$resultado = $conexion->query($query);


}

$query = "DELETE FROM `lugar` WHERE id_usuario = '$id' ";
$resultado = $conexion->query($query);

}else{



  /*   usuario comentario       */ 



  $verificar_comentarioU = mysqli_query($conexion, "SELECT * FROM `comentario` WHERE id_usuario  = '$id' " );
  

if(mysqli_num_rows($verificar_comentarioU)> 0){
   

 
$query = "DELETE FROM `comentario` WHERE id_usuario  = '$id'";
$resultado = $conexion->query($query);

}

  /*   usuario favoritos      */ 


  $verificar_favoritosU = mysqli_query($conexion, "SELECT * FROM `favoritos` WHERE id_usuario = '$id' " );
  

if(mysqli_num_rows($verificar_favoritosU)> 0){
   

 
$query = "DELETE FROM `favoritos` WHERE id_usuario = '$id' ";
$resultado = $conexion->query($query);


}




 
}


$query = "DELETE FROM `usuarios` WHERE id_usuarios = '$id' ";
$resultado = $conexion->query($query);

if(!$result){
    
    


        echo '<script>  alert(" CUENTA ELIMINADA");
    
        </script>';
 
 
      $extra = '..\..\registro.php';
     
         header("Location: $extra ");
    }else{

        echo '<script> alert(" ERROR");
        window.history.go(-1);
        </script>';
    
      
    } 


}


