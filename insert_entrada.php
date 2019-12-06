<?php
include 'index.php';

$valor = $_POST['valor'];
$fecha = $_POST['fecha'];

$querycont = pg_query($conexion, "INSERT INTO entradas(puerto,fecha) VALUES (".$valor.",'".$fecha."');");
//pg_query($conexion, "INSERT INTO ventas(gpurificada,galcalina) VALUES (1,1);");

pg_close($conexion);

 ?>
