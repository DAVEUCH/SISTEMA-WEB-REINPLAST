jQuery(document).on('submit','#formlg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'validar.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  $('.Entrar').val('Validando....');
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                  if (respuesta.tipo=='Admin') {
                    location='registro-productos.php';
                  }else if (respuesta.tipo=='Usuario') {
                    location='cotizacion.php';
                  }
                }else {
                  $('.error').slideDown('slow');
                  setTimeout(function(){
                  $('.error').slideUp('slow');
                },3000);
                $('.Entrar').val('Iniciar Secion');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });


		





