

<?php


include 'C:\xampp\htdocs\Mypetscr\php\cn.php';



$id = $_GET['id'];



$query = "DELETE FROM comentario WHERE id_comentario = $id ";
$resultado = $conexion->query($query);

if($resultado){

    echo '<script> alert("SU COMENTARIO FUE ELIMINADO);
    window.history.go(-1);
    </script>';

}else{

    echo '<script> alert("ERROR AL ELIMINAR);
    window.history.go(-1);
    </script>';


}

echo '<script> 
window.history.go(-1);
</script>';