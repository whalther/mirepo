<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Doujins</title>
<script type="text/javascript">
function validar(frm){
if(frm.titu.value.length<3)
alert('Introdusca el titulo');
return false;
}
}
</script>
</head>

<body>
<form action="doujinF.php" method="post" onsubmit="return validar(this)" enctype="multipart/form-data">
<table align="center">
<tr><th colspan="2"><center>Nuevo Doujin</center></th></tr>
<tr><td>Titulo</td><td><input type="text" name="titu" size="50"/></td></tr>
<tr><td></td><td>Descripci&oacute;n<br /><textarea name="des" cols="50" rows="5"></textarea></td></tr>
<tr><td></td><td>Contenido<br /><textarea name="con" cols="50" rows="15"></textarea></td></tr>
<tr><td>Thumbail</td><td><input type="file" name="thu" /></td></tr>
<tr><td></td><td><input type="submit" value="Guardar" /><input type="button" value="Volver" onclick="location.href='whalther1989.php'"</td></tr>

</table>
</form>
</body>
</html>
<?php
include('conec.php');
if(isset($_POST['titu'])){
$ti=$_POST['titu'];
$d=$_POST['des'];
$con=$_POST['con'];
$thu='thum/'.$_FILES['thu']['name'];
move_uploaded_file($_FILES['thu']['tmp_name'],'thum/'.$_FILES['thu']['name']);
if(mysql_query("insert into doujin(titulo_d,des_d,contenido_d,img_d)values('$ti','$d','$con','$thu')")){
echo'<center><h3>Doujin Agregado</h3></center>';
}
}
?>