<?php
session_start();
include('validar.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/javascript">
function valida(frm){
if(frm.titu.value.length<3){
alert("Introdusca el Titulo");
return false;}
}
</script>
</head>

<body>
<?php
include('menu.php');
?>
<table border="0" align="center">
<tr><th><center>Administrador</center></th></tr>
<tr><td>
<?php
if(isset($_GET['exito'])){
echo '<center><div style="width:200px;height:20px;background-color:blue"><b><font color="white">Categoria Ingresada !</font></b></div></center>';
}
?>
<form action="nCate.php" method="post" onsubmit="return valida(this)" enctype="multipart/form-data" >
<table >
<tr><th colspan="2"><center>Nueva Categoria</center></th></tr>
<tr><td>Titulo</td><td><input type="text" name="titu"  size="50"/></td></tr>
<tr><td>Thumbail</td><td><input type="file" name="thu" size="50"/></td></tr>
<tr><td><input type="submit" value="Crear" /></td></tr>
</table></form>
</body>
</html>
<?php
if(isset($_POST['titu'])){
$ti=$_POST['titu'];
$thu='thum/'.$_FILES['thu']['name'];
move_uploaded_file($_FILES['thu']['tmp_name'],'thum/'.$_FILES['thu']['name']);

if(mysql_query("insert into categoria(name_c,imgC)values('$ti','$thu')")){
echo '<center><h3>Categoria agregada</h3></center>';
}else{echo 'error';}
}
?>