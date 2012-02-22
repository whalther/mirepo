<?php
include('validar.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar</title>
</head>

<body>
<?php
include('conec.php');
$id=$_GET['id'];

$c=mysql_query("select * from categoria");
$s=mysql_query("select * from servidor");
$idio=mysql_query("select * from idiomas");
$se=mysql_query('select titulo,des,links,online,idiomas.idioma,idiomas.id_idioma,img,thum,categoria.name_c,categoria.id_cat,pass,tags from cont,idiomas,servidor,categoria where cont.id_idioma=idiomas.id_idioma and cont.id_servidor=servidor.id_servidor and cont.id_cat=categoria.id_cat and id_ht='.$id);
$r=mysql_fetch_assoc($se);
$idiom=mysql_query('select titulo,des,links,online,idiomas.idioma,idiomas.id_idioma,img,thum,categoria.name_c,servidor.id_servidor,servidor.name_s,tags from cont,idiomas,servidor,categoria where cont.id_idioma=idiomas.id_idioma and cont.id_servidor=servidor.id_servidor and cont.id_cat=categoria.id_cat and id_ht='.$id);
$idiom1=mysql_fetch_assoc($idiom);

$thu=mysql_query("select thum from cont where id_ht=".$id);
$thum=mysql_fetch_assoc($thu);
?>
<div style="position:fixed; top:180px; left:600px"><img src="<?=$thum['thum']?>" />
</div>
<form action="modi.php" method="post" onsubmit="return valida(this)" enctype="multipart/form-data" >
<table >
<input type="hidden" name="idh" value="<?=$id?>" />
<tr><th colspan="2"><center>Modificar Serie</center></th></tr>
<tr><td>Titulo</td><td><input type="text" name="titu" value="<?=$r['titulo']?>" size="50"/></td></tr>
<tr><td></td><td>Descripci&oacute;n<br /><textarea name="des"  cols="50" rows="6"><?=$r['des']?></textarea></td></tr>
<tr><td></td><td>Links<br /><textarea name="links" cols="50"  rows="6"><?=$r['links']?></textarea></td></tr>
<tr><td></td><td>Links Online<br /><textarea name="linksOn"  cols="50" rows="6"><?=$r['online']?></textarea></td></tr>
<tr><td>Password</td><td><input type="text" name="pass" value="<?=$r['pass']?>" size="30"/></td></tr>
<tr><td>Imagen Url </td><td><input type="text" name="img" value="<?=$r['img']?>" size="50"/></td></tr>
<tr><td>Categoria</td><td><select name="cat">
<option value="<?=$r['id_cat']?>"><?=$r['name_c']?></option>
<?php
while($r=mysql_fetch_array($c)){
echo '<option value="'.$r['id_cat'].'">'.$r['name_c'].'</option>';
}
?>
</select></td></tr>
<tr><td>Idioma</td><td><select name="idioma">
<option value="<?=$idiom1['id_idioma']?>"><?=$idiom1['idioma']?></option>
<?php
while($r=mysql_fetch_array($idio)){
echo '<option value="'.$r['id_idioma'].'">'.$r['idioma'].'</option>';
}
?>
</select></td></tr>
<tr><td>Servidor</td><td><select name="ser">
<option value="<?=$idiom1['id_servidor']?>"><?=$idiom1['name_s']?></option>
<?php
while($r=mysql_fetch_array($s)){
echo '<option value="'.$r['id_servidor'].'">'.$r['name_s'].'</option>';
}
?>
</select></td></tr>
<?php
$ta=mysql_query("select tags from cont where id_ht=".$id);
$tags=mysql_fetch_assoc($ta);
?>
<tr><td>Tags</td><td><input type="text"  name="tags" value="<?=$tags['tags']?>"/></td></tr>
<tr><td></td><td><input type="submit" value="Guardar" /><input type="button" value="Volver" onclick="location.href='index2.php'"/></td></tr>
</table>
</form>

</body>
</html>
