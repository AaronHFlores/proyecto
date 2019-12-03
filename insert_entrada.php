<?php
include 'index.php';

$valor = $_POST['valor'];

$querycont = pg_query($conexion, "INSERT INTO entradas(puerto) VALUES (".$valor.");");
//pg_query($conexion, "INSERT INTO ventas(gpurificada,galcalina) VALUES (1,1);");

pg_close($conexion);

 ?>
