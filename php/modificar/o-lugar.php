

<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$web = $_POST["web"];
$telefono = $_POST["telefono"];
$categoria = $_POST["categoria"];
$provincia = $_POST["provincia"];
$direccion = $_POST["direccion"];
$latitud = $_POST["latitud"];
$longitud= $_POST["longitud"];
$descripcion = $_POST["descripcion"];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$id = $_GET['id'];


$query = "UPDATE  lugar SET nombre = '$nombre', correo ='$correo', web= '$web', telefono = '$telefono', categoria ='$categoria',  provincia = '$provincia', direccion = '$direccion', descripcion = '$descripcion', latitud = '$latitud', longitud = '$longitud', foto = '$foto' WHERE id_usuario = '$id' ";
$resultado = $conexion->query($query);

if(!$resultado){

    echo '<script> alert("ERROR AL MODIFICAR");
    window.history.go(-1);
    </script>';


}else{

    echo '<script> alert("MODIFICADO CORRECTAMENTE");
    window.history.go(-1);
    </script>';
}
