

<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';



$id = $_GET['id'];



$query = "DELETE FROM favoritos WHERE id_favoritos = $id ";
$resultado = $conexion->query($query);

if($resultado){

    echo '<script> 
    window.history.go(-1);
    </script>';

}else{

    echo '<script> alert("ERROR AL ELIMINAR);
    window.history.go(-1);
    </script>';


}

