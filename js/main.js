
    buscar_datos();


function buscar_datos(consulta){
   
    $.ajax({
 
        url : '../php/obtener/busque.php',
         type : 'POST',
        dataType : 'php',
        data : { consulta: consulta },
   
    })
    .done(function(respuesta){
        $("#datos").php(respuesta);
     
     })

     .fail(function(){
        console.log("error nooo");
    
       })
  
    }

       $(document).on('keyup', '#busquedas',function(){
     
   
        var valor = $(this).val();
       
        if(valor !=""){
            buscar_datos(valor);
     
        }else{

            buscar_datos();
        }

       });

    
     
     
