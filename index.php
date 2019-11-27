<html>
<form action="insert.php" method="post">
<!--     CHECKBOX DE LAS PREGUNTAS-->
                  <button type="submit" name="pregunta" >&iquest;Qu&eacute; tan satisfecha(o) est&aacute; <br> usted con su vida?</button>
</form>
<?php
$hostname='ec2-107-22-239-155.compute-1.amazonaws.com';
$database='de9c1tahl31aah';
$user='huaalukjylvhjs';
$pass='55378e29e6931fad0f8b98e735b145de4ed7ae2d274cc167f4ce80bce5cf8035';

$conexion = pg_connect("host='ec2-107-22-239-155.compute-1.amazonaws.com' dbname=de9c1tahl31aah port=5432 user=huaalukjylvhjs password=55378e29e6931fad0f8b98e735b145de4ed7ae2d274cc167f4ce80bce5cf8035") or die ("Error de Conexión".pg_last_error());

 ?>
</html>
