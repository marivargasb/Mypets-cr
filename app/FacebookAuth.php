<?php

class FacebookAuth
{

protected $facebook;
protected $facebookUrl = "http://localhost/Mypetscr/perfil.php";

public function __construct(Facebook\Facebook $facebook){
$this->facebook = $facebook;

}

public function getHelper(){
return $this->facebook->getRedirectLoginHelper();

}

public function getAuthUrl(){
    return $this->getHelper()->getLoginUrl($this->facebookUrl,array('email'));
}

public function isLogin(){

return isset($_SESSION['id']);

}


public function  login(){
    include 'C:\xampp\htdocs\Mypetscr\php\cn.php';
    try{
        $response = $this->facebook->get('/me?fields=id,first_name,last_name,email,picture', $this->
       getHelper()->getAccessToken());
    
       $usuario = $response->getGraphUser();
    
      $id_facebook=  $usuario->getId();
      
      //verificar usuario

      if ($id_facebook!=0){


       //comprobar si el usuario exite 

       $verificar_usuario = mysqli_query($conexion, "SELECT `id_usuarios` FROM `usuarios` WHERE id_usuarios = '$id_facebook' " );
       
       
       if(mysqli_num_rows($verificar_usuario)> 0){
        
          //el usuario ya existe
       
          $_SESSION['id']= $usuario->getId();
          return true;
          echo "<pre>";
          var_dump($usuario);
          die();
       
       
             }else{
                 
                //obtenemos los datos del usuario
               
                $nombre= $usuario['first_name'] ;
                $apellido= $usuario['last_name'] ;
                 $correo =  $usuario['email'] ;
                 $contrasena=  '1234';
                 $foto =  addslashes(file_get_contents($usuario['picture']['tmp_name'])); 
                 ;

                //insertar en la base de datos
                $insertar = "INSERT INTO usuarios(id_usuarios, nombre, apellido, correo, contrasena,  foto, estado, tipo) VALUES  ('$id_facebook','$nombre','$apellido', '$correo' ,'$contrasena',' $foto ' ,'A','facebook' )";
                
                // EJECUTAR CONSULTA
                $resultado = mysqli_query($conexion, $insertar);
                if(!$resultado){
                
                    echo '<script> alert(" ERROR AL REGISTRAR AL USUARIO");
                    window.history.go(-1);
                    </script>';
                }else{
                   $_SESSION['id']= $usuario->getId();
   return true;
   echo "<pre>";
   var_dump($usuario);
   die();

                  
                 
                }
             }


      }

      
    }catch (Exception $e){
    
    
    }
    return  $this->getHelper()->getLoginUrl($this->facebookUrl,array('email'));
    
    }

}

?>
