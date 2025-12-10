<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Primer ejercicio</title>
</head>
hola
<body>
    <div class="container-lg">
        <center><h1 class="display-3">Formulario</h1></center>
        <div class="row">
            <div id="form" class="col-8">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><label for="id_nombre">Nombre</label></span>
                        <input type="text" name="nombre" id="id_nombre" class="form-control">
                        
                        <span class="input-group-text"><label for="id_apellido">Apellido</label></span>
                        <input type="text" name="apellido" id="id_apellido" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><label for="id_cedula">Cedula</label></span><input type="number" name="cedula" class="form-control" id="id_cedula">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><label for="id_email">Email</label></span><input type="text" name="email" class="form-control" id="id_email">                    
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><label for="id_numero">Numero</label></span><input type="number" name="numero" class="form-control" id="id_numero">                    
                    </div>
                </form>
            </div>
            <div id="req" class="col">
            </div>
        </div> 
    </div>
</body>

<style>
    span{
        width: 80px;
    }

    .col,.col-8{
        border: 1px solid black;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }    

</style>
</html>