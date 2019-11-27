<?php
include 'index.php';

$gp = $_POST['gp'];
$total = $gp;
$querycont = pg_query($conexion, "INSERT INTO tanques VALUES (".$total.");");
//pg_query($conexion, "INSERT INTO ventas(gpurificada,galcalina) VALUES (1,1);");

pg_close($conexion);

 ?>
