<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ver online</title>
<style>
.cua{
width:800px;
height:auto;
margin-left:120px;
padding-left:5px;
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
$in=mysql_query('select * from doujin where id_dou='.$id);
$r=mysql_fetch_assoc($in);

?>
<div class="cua" style="width:630px">
<h3><font color="#0099FF"><?=$r['titulo_d']?></font></h3>
<div style=" width:450px"><?=$r['des_d']?></div>
<div style=" width:450px"><?=$r['contenido_d']?></div>
<?php 
if($_SESSION['user']!=""){echo'<a href="modDoujin.php?id='.$id.'">Modificar</a>';}
?>
<div class="jun">
</div>

<div class="jun">
</div>

</div>
</body>
</html>
