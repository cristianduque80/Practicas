<?php
    include("conexion_on.php");
    
    //CONSULTA
    $consulta=mysqli_query($conex,"SELECT * FROM $table_db1");
    while($dato_consultado=mysqli_fetch_array($consulta)){
        echo $dato_consultado['nombre']."<br>";
    }