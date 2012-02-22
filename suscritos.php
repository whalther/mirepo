<?php
include('conec.php');
$e=$_POST['correo'];
mysql_query("insert into suscritos(email)values('$e')");
header('Location:index2.php?sus34ww-42s');

?>

