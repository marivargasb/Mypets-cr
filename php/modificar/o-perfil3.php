<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacimiento = $_POST['nacimiento'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

//$id = $_REQUEST['id'];

$id = $_GET['id'];


$query = "UPDATE  usuarios SET nombre= '$nombre', apellido= '$apellido', nacimiento='$nacimiento',foto = '$foto' WHERE id_usuarios = '$id' ";
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
