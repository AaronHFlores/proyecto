<?php
include 'index.php';

$gp = $_POST['gp'];
$ga = $_POST['ga'];
$lp = $_POST['lp'];
$la = $_POST['la'];
$lfp = $_POST['lfp'];
$lfa = $_POST['lfa'];
$ci = $_POST['ci'];
$cf = $_POST['cf'];
$d = $_POST['d'];
$total = $gp.", ".$ga.", ".$lp.", ".$la.", ".$ci.", ".$cf.", ".$lfp.", ".$lfa.", '".$d."'";
$querycont = pg_query($conexion, "INSERT INTO ventas(gpurificada,galcalina,lipurificada,lialcalina,cajainicio,cajafin,lfpurificada,lfalcalina,fecha) VALUES (".$total.");");
//pg_query($conexion, "INSERT INTO ventas(gpurificada,galcalina) VALUES (1,1);");

pg_close($conexion);

 ?>
