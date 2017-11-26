<?php 


$categoria = $_POST['categoria'];
$provincia = $_POST['provincia'];
 
if(empty($categoria)){

    $sql_valoresc = '1'; 

}else{

    foreach($categoria as $cate){
        $valorc = "'".$cate."'";
        $categorias_aux[] = $valorc;
     }
     $texto_categoria = implode(', ', $categorias_aux);
     $sql_valoresc = " categoria IN (" .$texto_categoria. ") ";
     
     
   
   
}



if(empty($provincia)){
    
    $sql_valoresp = '1';    
    }else{


        foreach($provincia as $pro){
            $valorp = "'".$pro."'";
            $provincia_aux[] = $valorp;
         }
         $texto_provincia = implode(', ', $provincia_aux);
         $sql_valoresp = "  provincia IN  (" .$texto_provincia. ")";
        
    }





$extra = '..\..\mypetscr2.php';

header("Location: $extra?categoria= $sql_valoresc &provincia= $sql_valoresp  ");
