$(document).ready(function(){
  var id = var_id;
    
      $('#busquedas').on('keyup', function(){
        var busquedas = $('#busquedas').val()
        console.log(busquedas);
        var parametros = {
          "busquedas" : busquedas,
          "id" : id,
  };            

        $.ajax({
          type: 'POST',
          url: 'php/obtener/busque.php',
          data: parametros,
         // data: {'id': id},
          beforeSend: function(){
            $('#datos').html('<img src="img/pacman.gif">')
          }
        })
        .done(function(resultado){
          $('#datos').html(resultado)
        })
        .fail(function(){
          alert('Hubo un error :(')
        })
      })

    })
  