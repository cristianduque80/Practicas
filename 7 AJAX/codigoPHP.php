<?php
    include ("db_on.php");
    
    $datos_select=$_POST['datos_select'];
    if($datos_select==1){$table = $table_db1;}
    if($datos_select==2){$table = $table_db2;}
    if($datos_select==3){$table = $table_db3;}

    echo '
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>Apellido</th>
                <th>Telefono</th>
            </tr> ';

  
    $consulta=mysqli_query($conex,"SELECT * FROM $table");
    while($datos_consultados=mysqli_fetch_array($consulta)){
        echo '<tr>
                    <td>'.$datos_consultados['id'].'</td>
                    <td>'.$datos_consultados['nombre'].'</td>
                    <td>'.$datos_consultados['apellido'].'</td>
                    <td>'.$datos_consultados['telefono'].'</td>
                </tr>';
    
    }

    echo'
        </table>
    ';