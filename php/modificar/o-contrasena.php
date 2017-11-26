

<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$pass = $_POST["pass"];
$con1= $_POST["con1"];
$con2 = $_POST["con2"];
$id = $_GET['id'];

$verificar_usuario = mysqli_query($conexion, "SELECT *  FROM usuarios WHERE id_usuarios = '$id' and contrasena = '$pass' " );


if(mysqli_num_rows($verificar_usuario)> 0){

 if($con1 == $con2){  

$query = "UPDATE usuarios SET contrasena = '$con1' WHERE id_usuarios = '$id' ";
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

    echo '<script> alert("LA CONTRASEÑA NO COINSIDE ");
    window.history.go(-1);
    </script>';



} 
}else{

    echo '<script> alert("CONTRASEÑA INCORRECTA");
    window.history.go(-1);
    </script>';


}