<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';



   
$verificar_usuario = mysqli_query($conexion, " SELECT * FROM `datos` WHERE id_datos = '1' " );


    if ($row = $verificar_usuario->fetch_row()) {
     $cantidad = ($row[1]);

      }

      $query = "SELECT correo,nombre FROM `usuarios`";
      
     $resultado = $conexion->query($query);
     while($rows = $resultado-> fetch_assoc()){
       $correo =  $rows['correo']; 
       $nombre =  $rows['nombre']; 





       
       
       $mensaje =  "Estimad@ :"  .$nombre ."\n"  ." el dia de hoy tenemos " . $cantidad ." lugares nuevos ";
       $contenido = "\nNombre: " .$nombre . "\nCorreo: " .$correo . "\n Mensaje: " . $mensaje; 
      $cabecera = 'From: '  . $correo . "\r\n" .
                  'Reply-To: '.  $correo  ."\r\n" .
                  'X-Mailer: PHP/' .phpversion();
                     


       if(mail($correo, 'Anuncio' ,$contenido, $cabecera)){

           echo 'correo enviado';



       }else{

           echo 'no se pudo enviar';
       
       }


     }

     
     $query = "UPDATE `datos` SET `cantidad`= '0'  WHERE id_datos= '1' ";
     $resultado = $conexion->query($query);
     

  

           
        // $extra = '..\..\registro.php';
         
        // header("Location: $extra");
        
    
         
    
  

   



