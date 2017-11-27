

$(document).ready(function(){
    $('#busquedas').focus()
  
    $('#busquedas').on('keyup', function(){
      var busquedas = $('#busquedas').val()
      
      
      $.ajax({
        type: 'POST',
        url: 'php/obtener/busque.php',
        data: {'busquedas': busquedas},
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