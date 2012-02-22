<?php
session_start();
include('conec.php');
if($_SESSION['user']!=""){
$c=mysql_query("select * from categoria");
$s=mysql_query("select * from servidor");
$idio=mysql_query("select * from idiomas");
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

if(frm.des.value.length<3){
alert("Introdusca la descripcion");
return false;}
if(frm.links.value.length<3){
alert("Introdusca los links");
return false;}
}
if(frm.pass.value.length<3){
alert("Tiene Password?");
return false;}
}
if(frm.imagen.value.length<3){
alert("Introdusca la url de la imagen");
return false;}
if(frm.thu.value.length<3){
alert("Introdusca el Thumbail");
return false;}
}
</script>
</head>

<body>
<?php
$me=mysql_query('select * from cont where id_servidor=1');
$me1=mysql_num_rows($me);
$mu=mysql_query('select * from cont where id_servidor=2');
$mu1=mysql_num_rows($mu);
$ra=mysql_query('select * from cont where id_servidor=3');
$ra1=mysql_num_rows($ra);
$ot=mysql_query('select * from cont where id_servidor=4');
$ot1=mysql_num_rows($ot);
$tos=mysql_query('select * from cont');
$tos1=mysql_num_rows($tos);
?>
<center><div class="topInfo"><font color="#666666">Series Hentai en:</font> <font color="#F781F3">Mediafire(<?=$me1?>) | Megaupload(<?=$mu1?>) | Rapidshare(<?=$ra1?>) | Otros(<?=$ot1?>) | Total: <b><?=$tos1?> Series Hentai</b></font></div></center>
<table border="0" align="center">
<tr><th><center>Administrador</center></th></tr>
<tr><td><hr /><a href="index2.php">Principal</a> | <a href="nCate.php">Nueva categoria</a> | <a href="doujinF.php">Doujins</a> | <a href="juegosF.php">Juegos</a> |  <a href="salir.php">Salir</a><hr /></td></tr>
<tr><td>
<?php
if(isset($_GET['exito'])){
echo '<center><div style="width:200px;height:20px;background-color:blue"><b><font color="white">Serie Ingresada !</font></b></div></center>';
}
?>
<form action="whaltSub22-43.php" method="post" onsubmit="return valida(this)" enctype="multipart/form-data" >
<table >
<tr><th colspan="2"><center>Nueva Serie</center></th></tr>
<tr><td>Titulo</td><td><input type="text" name="titu"  size="50"/></td></tr>
<tr><td></td><td>Descripci&oacute;n<br /><textarea name="des" cols="50" rows="6"></textarea></td></tr>
<tr><td></td><td>Links<br /><textarea name="links" cols="50" rows="6"></textarea></td></tr>
<tr><td></td><td>Links Online<br /><textarea name="linksOn" cols="50" rows="6"></textarea></td></tr>
<tr><td>Password</td><td><input type="text" name="pass"  size="30"/></td></tr>
<tr><td>Idioma</td><td><select name="idioma">
<?php
while($r=mysql_fetch_array($idio)){
echo '<option value="'.$r['id_idioma'].'">'.$r['idioma'].'</option>';
}
?>
</select></td></tr>
<tr><td>Imagen Url </td><td><input type="text" name="imagen" size="50"/></td></tr>
<tr><td>Thumbail</td><td><input type="file" name="thu" size="50"/></td></tr>
<tr><td>Categoria</td><td><select name="cat">
<?php
while($r=mysql_fetch_array($c)){
echo '<option value="'.$r['id_cat'].'">'.$r['name_c'].'</option>';
}
?>
</select></td></tr>
<tr><td>Servidor</td><td><select name="ser">
<?php
while($r=mysql_fetch_array($s)){
echo '<option value="'.$r['id_servidor'].'">'.$r['name_s'].'</option>';
}
?>
</select></td></tr>
<tr><td>Tags</td><td><input type="text"  name="tags"/></td></tr>
<tr><td></td><td><input type="submit" value="Guardar"</td></tr>
</table>
</form>
</td></tr></table>
</body>
</html>
<?php
}else{
?>
<center>
<a href="index2.php">Principal</a><br />
<form action="control.php" method="post">
Password: <input type="password" name="pass" /><input type="submit" value="Entrar" />
</form></center>
<?php
}
?>