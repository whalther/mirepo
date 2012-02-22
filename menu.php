 <!-- MENU PRINCIPAL Y BUSCADOR DE SERIES -->
 <style>
 .topInfo{
 position:absolute;
 left:200px;
 top:0px;
 z-index:0
 }
  .fondo{
  position:absolute;
  width:100%;
  height:200px;
  background-color:#666666;
  top:0;
  }
 </style>
<?php
include('conec.php');
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
<div class="topInfo"><font color="#666666">Series Hentai en:</font> <font color="#F781F3">Mediafire(<?=$me1?>) | Megaupload(<?=$mu1?>) | Rapidshare(<?=$ra1?>) | Otros(<?=$ot1?>) | Total: <b><?=$tos1?> Series Hentai</b></font></div>


<br><br><br><br><br><br><br><div style=" margin-left:120px;">
<form action="tool.php" method="post">
<a href="index2.php">Home</a> | <a href="categorias.php" >Categorias</a> | <a href="comen.php" >Comentarios y Sugerencias</a> <?php if($_SESSION['user']!=""){echo ' | <a href="salir.php">Salir</a>';}?><br />


<input type="text" name="bus">
<select name="idioma">
<option value="0">Cualquier Idioma</option>
<option value="1">Espa&ntilde;ol</option>
<option value="2">Espa&ntilde;ol Latino</option>
<option value="3">Sub Espa&ntilde;ol</option>
<option value="4">Sub Ingles</option>
<option value="5">Japon&eacute;s</option>
</select>
<select name="servidor">
<option value="1">Mediafire</option>
<option value="2">Megaupload</option>
<option value="3">RapidShare</option>
<option value="0">Cualquier Servidor</option>
</select>
<input type="submit" value="Buscar"> | <font color="#F781F3"><b><?=$tos1?> Series y Ovas Hentai</b></font></form></div>

 <!-- FIN DE MENU PRINCIPAL ***************************************** -->
