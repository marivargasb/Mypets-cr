<?php

require_once('app/ini.php');




if($fbauth->login()){

    if(isset($_SESSION['id'])){
      //  session_start();
    
      
       
                $_SESSION['id'];
          
                $extra = 'perfil3.php';
                
                header("Location: $extra");
         
        
        }else{
        
          header("Location: registro.php");
        
        }
      
  
    }else{
    
       die('ERROR AL INICIAR SESION');
    }
    

?>

