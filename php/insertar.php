<?php 

include 'config.php';

$mysqli = new mysqli($Host, $User, $Password, $Dbname, $Port, $Socket);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

//Datos del Formulario
$cantidad = $_POST['c1'];
$n_cliente = $_POST['c2'];
$n_servicio = $_POST['c3'];

$query_insert = "INSERT INTO tabla_pagos(
                cantidad,
                n_cliente,
                n_servicio
                )
                VALUES(
                $cantidad,
                '$n_cliente',
                '$n_servicio'
                );";
                    
$mysqli ->query($query_insert);


$mysqli->close();

header('Location: /index.php');


?>