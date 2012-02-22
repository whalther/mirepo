<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include('conec.php');

$s=mysql_query("select * from cont,idiomas,servidor,categoria where cont.id_idioma=idiomas.id_idioma and cont.id_servidor=servidor.id_servidor and cont.id_cat=categoria.id_cat and id_ht=12");
$r=mysql_fetch_assoc($s);
echo'<b>Titulo: </b>'.$r['titulo'].'<br>';
echo'<b>Descriccion:</b><br>';
echo '<div style="width:500px;">'.$r['des'].'</div><br>';
echo'<b>Idioma: </b>'.$r['idioma'].'<br>';
echo'<b>Servidor: </b>'.$r['name_s'].'<br>';
echo'<b>Links:</b><br>';
echo '<div style="width:500px;">'.$r['links'].'</div><br>';
?>
</body>
</html>
