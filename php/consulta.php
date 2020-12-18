<?php

include 'config.php';

$mysqli = new mysqli($Host, $User, $Password, $Dbname, $Port, $Socket);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

if ($resultado = $mysqli->query("SELECT * FROM tabla_pagos")) {
    //printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    while($row = $resultado->fetch_array()){
        echo"
          <tr>
              <td>".$row['id']."</td>
              <td>".$row['cantidad']."</td>
              <td>".$row['n_cliente']."</td>
              <td>".$row['n_servicio']."</td>
            </tr>
          ";
    }

    $resultado->close();
}

$mysqli->close();

?>