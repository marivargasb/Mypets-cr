<?php



include 'C:\xampp\htdocs\Mypetscr\php\cn.php';



$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$apellido2 = $_POST["apellido2"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$contrasena2 = $_POST["contrasena2"];
/*
$nacimiento = $_POST["nacimiento"];
$foto =  addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$estado = $_POST["estado"];
$tipo = $_POST["tipo"];
*/

if($contrasena == $contrasena2){


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' " );

if(mysqli_num_rows($verificar_usuario)> 0){

echo '<script> alert(" EL USUARIO YA ESTA REGISTRADO");
window.history.go(-1);
</script>';
exit;

}else{


$insertar = "INSERT INTO usuarios( nombre, apellido, apellido2, correo, contrasena,nacimiento, foto, estado, tipo) VALUES  ('$nombre','$apellido', '$apellido2','$correo' ,'$contrasena','null' ,'null', 'A','N' )";

// EJECUTAR CONSULTA
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){

    echo '<script> alert(" ERROR AL REGISTRAR AL USUARIO");
    window.history.go(-1);
    </script>';
}else{

    echo '<script> alert(" USUARIO REGISTRADO EXITOSAMENTE");
    window.history.go(-1);
    </script>';
}

}




//CERRAR CONEXION

mysqli_close($conexion);
}else{

    echo '<script> alert(" CONFIRME SU CONTRASEÑA");
    window.history.go(-1);
    </script>';



}

mysqli_close($conexion);