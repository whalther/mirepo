<!DOCTYPE html> 
 <html> 
 <head> 
	<title>Buscador Hentai</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> <!--PARA PROBLEMAS CON LA Ñ Y TILDES COLOCAR EN CADA PAGINA--> 
 <!-- include the Tools --> 
	<script src="jquery//jquery.tools.min.js"></script> 
  	<!-- standalone page styling (can be removed) --> 
	<link rel="stylesheet" type="text/css" href="css/tool.css"/>	
</head> 
<body> 
<?php
//INCLUIR MENU
include('menu.php');
?>
<?php //GENERANDO LOS LINKS///////////////////////////////?>
<!-- ESTE ES EL CONTENEDOR DE TODOS LOS ARCHIVOS ELLOS SE CARGARAN AQUI ESTA ES LA DIVISION ENTRE EL MENU Y EL CONTENIDO -->
<div class="re">
<table border="0" >
<?php
include('conec.php');
$b=$_POST['bus'];
$idio=$_POST['idioma'];
$ser=$_POST['servidor'];
if($idio!=0 and $servidor!=0){
$re=mysql_query("SELECT *
FROM cont,
  servidor,
  idiomas
WHERE MATCH(titulo,des,tags)AGAINST('$b')
    AND cont.id_servidor = servidor.id_servidor AND cont.id_idioma=idiomas.id_idioma
    AND cont.id_servidor = $ser AND cont.id_idioma=$idio");
$servidor=mysql_query("select name_s from servidor where id_servidor=".$ser);
$servi=mysql_fetch_assoc($servidor);
$idioma=mysql_query("select idioma from idiomas where id_idioma=".$idio);
$idiom=mysql_fetch_assoc($idioma);
$nr=mysql_num_rows($re);
}
elseif($idio==0 and $servidor!=0){
$re=mysql_query("SELECT *
FROM cont,
  servidor,
  idiomas
    WHERE MATCH(titulo,des,tags)AGAINST('$b')
    AND cont.id_servidor = servidor.id_servidor AND cont.id_idioma=idiomas.id_idioma 
    AND cont.id_servidor = $ser");
$servidor=mysql_query("select name_s from servidor where id_servidor=".$ser);
$servi=mysql_fetch_assoc($servidor);
$idiomC="Cualquiera";
$nr=mysql_num_rows($re);
}
elseif($idio!=0 and $servidor==0){
$re=mysql_query("SELECT *
FROM cont,
    idiomas,
	servidor
WHERE MATCH(titulo,des,tags)AGAINST('$b')
  AND cont.id_idioma=idiomas.id_idioma AND cont.id_servidor = servidor.id_servidor
    AND cont.id_idioma=$idio");
$serviC="Cualquiera";
$idioma=mysql_query("select idioma from idiomas where id_idioma=".$idio);
$idiom=mysql_fetch_assoc($idioma);
$nr=mysql_num_rows($re);
}
elseif($idio==0 and $servidor==0){
$re=mysql_query("SELECT *
FROM cont,
 servidor,
  idiomas
  WHERE MATCH(titulo,des,tags)AGAINST('$b')
  AND cont.id_idioma=idiomas.id_idioma AND cont.id_servidor = servidor.id_servidor");
 $serviC="Cualquiera";
 $idiomC="Cualquiera";
  $nr=mysql_num_rows($re);
}
?>
<div style="width:500px;">
<font color="#999999">Idioma: </font><font color="#666666"><?=$idiom['idioma']?> <?=$idiomC?></font>
<font color="#999999"> | Servidor: </font><font color="#666666"><?=$servi['name_s']?> <?=$serviC?></font> 
<font color="#999999">|</font><font color="#0099FF"> <b><?=$b?></b> : <?=$nr?> Resultados</font></div>
<?php
$n=1;
while($r=mysql_fetch_array($re)){
if($r['online']==''){
$line='no';
}else{$line='si';}
/*<a href="online.php?id=<?=$r['id_ht']?>&online=<?=$line?>"><font color="#0080FF" size="4"><?=$r['titulo']?></font></a> */
?>
<style>
#download_now<?=$n?> {
	display:block;
	height:auto;
	/*margin-bottom:30px;*/
	overflow:hidden;
	/*text-indent:-999em;*/
	color:#0B3861;
	width:500px;
	border:solid 1px #CCCCCC;
	background-color:#EFF5FB;
	cursor:pointer;
	padding-left:7px;
	} 
	a{
	text-decoration:none;}
</style>
<!-- trigger element. a regular workable link  --> 
<tr><td width="400">
<a id="download_now<?=$n?>" href="online.php?id=<?=$r['id_ht']?>&online=<?=$line?>"><?=$r['titulo']?></a>
<!-- tooltip element --> 
<div class="tooltip"> 
	<img src="<?=$r['thum']?>" alt="Flying screens" 
		style="float:left;margin:0 10px 20px 0" width="100" height="143"/> 
 <?PHP
 $des= substr($r['des'],0,150);

 ?>
<table style="margin:0"> 
<tr> <td class="label">Titulo</td><td><?=$r['titulo']?></td></tr> 
<tr><td colspan="2"><span class="label">Sinopsis:</span><br><div style="width:290px; height:40px"><?=$des.'...'?></div></td></tr> 
<tr> <td class="label">Idioma</td><td><?=$r['idioma']?></td> 
</tr> <tr> <td class="label">Servidor</td> <td><?=$r['name_s']?></td> </tr>		
</tr> <tr> <td class="label">Online</td> <td><?=$line?></td> </tr>		
</table> 
 </div></td></tr>
<script> 
// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
$(document).ready(function() {
 
$("#download_now<?=$n?>").tooltip({ effect: 'slide'});
});
</script>

<?php
$n++;
}
?></table>
 <?php echo $_pagi_navegacion;?></div>
<!-- FIN CONTENEDOR RESULTADO -->
</body> 
 </html> 