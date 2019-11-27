<html>
<a href="insert.php">Inicio</a>
<?php
$hostname='ec2-107-22-239-155.compute-1.amazonaws.com';
$database='de9c1tahl31aah';
$user='huaalukjylvhjs';
$pass='55378e29e6931fad0f8b98e735b145de4ed7ae2d274cc167f4ce80bce5cf8035';

$conexion = pg_connect("host='ec2-107-22-239-155.compute-1.amazonaws.com' dbname=de9c1tahl31aah port=5432 user=huaalukjylvhjs password=55378e29e6931fad0f8b98e735b145de4ed7ae2d274cc167f4ce80bce5cf8035") or die ("Error de Conexión".pg_last_error());
$gp = $_POST['gp'];
$ga = $_POST['ga'];
$lp = $_POST['lp'];
$la = $_POST['la'];
$lfp = $_POST['lfp'];
$lfa = $_POST['lfa'];
$ci = $_POST['ci'];
$cf = $_POST['cf'];
$d = $_POST['d'];
$total = $gp.", ".$ga.", ".$lp.", ".$la.", ".$ci.", ".$cf.", ".$lfp.", ".$lfa.;
$querycont = pg_query($conexion, "INSERT INTO ventas(gpurificada,galcalina,lipurificada,lialcalina,cajainicio,cajafin,lfpurificada,lfalcalina,fecha) VALUES (".$total.");");

pg_close($conexion);
 ?>
</html>
