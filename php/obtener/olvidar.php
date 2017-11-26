<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';


$correo = $_POST["correo"];


    
        
$verificar_usuario = mysqli_query($conexion, "SELECT id_usuarios, correo , nombre , contrasena FROM usuarios WHERE correo = '$correo'  " );


if(mysqli_num_rows($verificar_usuario)> 0){

    if ($row = $verificar_usuario->fetch_row()) {
        $id = ($row[0]);
        $nombre = ($row[2]);
   
         }

     $cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    
     $lg_cadena = strlen($cadena);
    

      for($x=1; $x <= 6; $x++){
            
        $aleatorio = mt_rand(0, $lg_cadena -1);
      $pass = substr($cadena , $aleatorio,6);

      }
 


  
    $query = "UPDATE usuarios SET contrasena= '$pass' WHERE id_usuarios =  '$id' ";
    $resultados = $conexion->query($query);
   

    if($resultados){
        echo "aqui";
        $destino = "mvb9623@gmail,com";
        $mensaje =  "Estimad@ :"  .$nombre ."\n"  ." Hemos realizado el cambio de contraseña" ."\n" ." SU NUEVA CONTRASEÑA ES : "  .$pass;
        $contenido = "\nNombre: " .$nombre . "\nCorreo: " .$correo . "\n Mensaje: " . $mensaje; 
       $cabecera = 'From: mvb1996.23@gmail.com' . "\r\n" .
                   'Reply-To: mvb1996.23@gmail.com'.  "\r\n" .
                   'X-Mailer: PHP/' .phpversion();
                      
echo $contenido;
      

        if(mail($correo, 'Cambio de Contraseña' ,$contenido, $cabecera)){

            echo '<script> alert("CORREO ENVIADO");
            window.history.go(-1);
              </script>';


        }else{

            echo '<script> alert("NO SE PUDO ENVIAR");
            window.history.go(-1);
              </script>';
        
        }
           
        // $extra = '..\..\registro.php';
         
        // header("Location: $extra");
        
    
         
    
    }else{
    
        echo '<script> alert("ERROR AL MODIFICAR");
        window.history.go(-1);
        </script>';
    
    










    }

    }else{

        echo '<script> alert("ESTE CORREO NO EXISTE");
        window.history.go(-1);
        </script>';
    



    }




