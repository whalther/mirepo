<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> <!--PARA PROBLEMAS CON LA Ñ Y TILDES COLOCAR EN CADA PAGINA-->
<title>Serie Info</title>
<style>
.cua{
width:700px;
height:auto;
margin-left:120px;
}
.jun{
float:left;
margin-right:10px;}
</style>
</head>

<body>
<?php
include('menu.php');
$id=$_GET['id'];
$on=$_GET['online'];
$in=mysql_query('select * from cont,servidor,idiomas where cont.id_servidor=servidor.id_servidor and cont.id_idioma=idiomas.id_idioma and id_ht='.$id);
$r=mysql_fetch_assoc($in);

?>
<div class="cua">
<h3><font color="#0099FF"><?=$r['titulo']?></font></h3>

<div class="jun"><img src="<?=$r['img']?>" width="320" height="460"  /></div>
<div class="jun">
<?php
if($_SESSION['user']!=""){
echo '<a href="mod.php?id='.$id.'">Modificar</a><br>';
}
?>
<b>Descripci&oacute;n:</b><br />
<div style="width:500px; height:auto; padding-top:5px; padding-bottom:5px; padding-left:5px; padding-right:5px;">
<?=$r['des']?>
</div>
Idioma: <b><?=$r['idioma']?></b><br />
Servidor: <b><?=$r['name_s']?></b><br />
<font color="#0099FF"><b>Links para Descargar:</b></font><br />
<div style="width:600px; height:auto; padding-top:5px; padding-bottom:5px; padding-left:5px; padding-right:5px;">
<font color="#0099FF"><?=$r['links']?></font>
<br />Password: <b><?=$r['pass']?></b>
</div>
<?php
if($on=='si'){///////////ver online
?>
<hr />
<font color="#0099FF"><b>Links para Ver ONLINE:</b></font><br />
<div style="width:500px; height:auto; padding-top:5px; padding-bottom:5px; padding-left:5px; padding-right:5px;">
<?=$r['online']?>
</div>
<?php
}
?><br /><br /><br /><br />
<hr size="1" color="#CCCCCC" />
<center><i>Recopilaci&oacute;n Hentai: 2011</i></center>
</div>
</div>
</body>
</html>
