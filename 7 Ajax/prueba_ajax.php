<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Prueba Ajax</title>
</head>
<body>
<button type="submit" onclick="saludame()">Saludo</button>
<div id="mostrar_mensaje">
    
</div>

<script>
	function saludame(){ 
      var parametros = 
      {
        "nombre" : "cristian",
        "apellido" : "duque",
        "telefono" : "123456789"
      };

      $.ajax({
        data: parametros,
        url: 'codigoPHP.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
</script>
</body>
</html>