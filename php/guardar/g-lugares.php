<?php



include 'C:\xampp\htdocs\Mypetscr\php\cn.php';

$id = $_GET['id'];



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
$foto =  addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$estado = $_POST["estado"];


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM lugar WHERE nombre = '$nombre' " );


if(mysqli_num_rows($verificar_usuario)> 0){

echo '<script> alert(" EL LUGAR YA ESTA REGISTRADO");
window.history.go(-1);
</script>';
exit;

}else{


$insertar = "INSERT INTO lugar( nombre, correo, web, telefono, categoria, provincia, direccion, descripcion, foto, estado, id_usuario, latitud , longitud ) VALUES  ('$nombre', '$correo', '$web', '$telefono', '$categoria', '$provincia', '$direccion', '$descripcion', '$foto', 'S', '$id' , '$latitud', '$longitud')";




// EJECUTAR CONSULTA
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){

    echo '<script> alert(" ERROR AL REGISTRAR AL USUARIO");
    window.history.go(-1);
    </script>';
}else{

 
    $verificar_usuario = mysqli_query($conexion, " SELECT * FROM `datos` WHERE id_datos = '1' " );
    

        if ($row = $verificar_usuario->fetch_row()) {
         $cantidad = ($row[1]);
    
          }
     
     $cant = $cantidad+1;
          echo $cant;
    $query = "UPDATE `datos` SET `cantidad`= '$cant'  WHERE id_datos= '1' ";
    $resultado = $conexion->query($query);
    
    echo '<script> alert("  REGISTRO EXITOSA");
    </script>';
   
    $extra = '..\..\form_lugar.php';
    
        header("Location: $extra ");


}

}




//CERRAR CONEXION

mysqli_close($conexion);
