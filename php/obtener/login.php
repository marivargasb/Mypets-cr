<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];



$verificar_usuario = mysqli_query($conexion, "SELECT id_usuarios, correo, contrasena  FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' " );


if(mysqli_num_rows($verificar_usuario)> 0){
 
    if ($row = $verificar_usuario->fetch_row()) {
     $id = ($row[0]);

      }

      session_start();

      $_SESSION['id'] = $id;

      $extra = '..\..\perfil.php';
      
      header("Location: $extra");
 
   
}else{

    echo '<script> alert("ERROR DE CORREO O CONTRASEÑA");
    window.history.go(-1);
    </script>';

  
}


mysqli_close($conexion);