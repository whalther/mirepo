<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Doujin</title>
</head>

<body>
<?php
include('conec.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
$c=mysql_query("select * from doujin where id_dou=".$id);
$r=mysql_fetch_array($c);
?>
<form action="modDoujin.php" method="post" onsubmit="return validar(this)" enctype="multipart/form-data">
<table align="center">
<tr><th colspan="2"><center>Modificar Doujin</center></th></tr>
<tr><td>Titulo</td><td><input type="text" name="titu" value="<?=$r['titulo_d']?>"size="50"/></td></tr>
<tr><td></td><td>Descripci&oacute;n<br /><textarea name="des" cols="50" rows="5"><?=$r['des_d']?></textarea></td></tr>
<tr><td></td><td>Contenido<br /><textarea name="con" cols="50" rows="15"><?=$r['contenido_d']?></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Guardar" /><input type="button" value="Volver" onclick="location.href='doujinInfo.php?id=<?=$id?>'" /></td></tr>
<input type="hidden" name="id" value="<?=$id?>"
</table>
</form>
<?php
}
if(isset($_POST['titu'])){
$ti=$_POST['titu'];
$d=$_POST['des'];
$con=$_POST['con'];
$id=$_POST['id'];
if(mysql_query("update doujin set titulo_d='$titu',des_d='$d',contenido_d='$con' where id_dou=".$id)){
echo'<script>location.href="doujinInfo.php?id='.$id.'"</script>';
}
}
?>
</body>
</html>
