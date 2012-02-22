<?Php
include('conec.php');
$com=$_POST['comenta'];
$f=date('y-m-d');
if(mysql_query("insert into comentarios(comentario,fecha)values('$com','$f')")){
header('Location:comen.php?enviado');
}

?>
