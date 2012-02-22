<?php
session_start();
?>
<!DOCTYPE html>
 
<html>
 
<!--
	This is a jQuery Tools standalone demo. Feel free to copy/paste.
	                                                         
	http://flowplayer.org/tools/demos/
	
	Do *not* reference CSS files and images from flowplayer.org when in production  
 
	Enjoy!
-->
 
<head>
	<title>jQuery Tools standalone demo</title>
 
	<!-- include the Tools -->
	<script src="jquery/jquery.tools.min.js"></script>
	 
 
	<!-- standalone page styling (can be removed) -->
	<link rel="stylesheet" type="text/css" href="css/categorias/standalone.css"/>	
 
 
	<link rel="stylesheet" type="text/css" href="css/categorias/overlay-apple.css"/>
	
	<style>
	
	/* black version of the overlay. simply uses a different background image */
	div.apple_overlay.black {
		background-image:url(css/categorias/transparent.png);		
		color:#fff;
		
	}
	
	div.apple_overlay h2 {
		margin:10px 0 -9px 0;
		font-weight:bold;
		font-size:14px;
	}
	
	div.black h2 {
		color:#fff;
	}
	
	#triggers {
		margin-top:2px;
		text-align:center;
	}
	
	#triggers img {
		background-color:#fff;
		padding:2px;
		border:1px solid #ccc;
		margin:2px 5px;
		cursor:pointer;
		-moz-border-radius:4px;
		-webkit-border-radius:4px;
	}
	.conte{
	float:left;
}
	</style>
 
</head>
 
<body>
<?php include('menu.php');

$_pagi_sql='select * from cont order by id_ht desc';
$_pagi_cuantos = 3;
include('funcio/paginator.inic.php');
$imt1=mysql_query('select * from cont,idiomas,servidor,categoria where cont.id_idioma=idiomas.id_idioma and cont.id_servidor=servidor.id_servidor and cont.id_cat=categoria.id_cat order by id_ht desc');
?> 
 
<!-- trigger elements -->
<div style="width:750px;margin-left:100px;" class="conte">
<div id="triggers">
<?php
$n=1;
while($r=mysql_fetch_array($_pagi_result)){
?>
<img src="<?=$r['thum']?>" width="160" height="220" rel="#photo<?=$n?>"/>
<?php
$n++;
}
?><br>
 <?php echo $_pagi_navegacion;?>
</div>

<?php
$e=1;
while($r1=mysql_fetch_array($imt1)){
?>
<div class="apple_overlay black" id="photo<?=$e?>">
	<img src="<?=$r1['img']?>" width="320" height="460" />
 
	<div class="details" style="overflow:scroll; height:130px">
		<h2><?=$r1['titulo']?> | <?=$r1['namce_c']?> | <?=$r1['idioma']?> | <?=$r1['name_s']?> | <a href="online.php?id=<?=$r1['id_ht']?>&online=no"><font color="#FFFFFF">DESCARGAR</font></a>| Online:<?php if($r1['online']!=''){echo 'SI - <a href="online.php?id='.$r1['id_ht'].'&online=si"><font color="#FFFFFF">VER</font></a>';}else{echo 'NO';}?> 
       <?php if($_SESSION['user']!=""){echo ' | <a href="mod.php?id='.$r1['id_ht'].'"><font color="white">Modificar</font></a>';}?></h2>
 
		<p>
			<font size="3"><?=$r1['des']?></font>
		</p>
	</div>
   
</div>
<?php
$e++;
}
?></div><!-- CONTENEDOR FIN-->
<div class="conte" style="width:200px; height:600pc;"><!--OPCIONES LATERAL-->
Categoria:<br>
<select name="categoria">
<option value="todas">Todas</option>
</select><br>
Suscribete<br>
<input type="text" name="corre">
<input type="submit" value="Suscribete"><br>
<font color="#0099FF"><b>Hentai</b></font><br>
<a href="">DOUJINS</a><br>
<a href="">IMAGENES</a><br>
<a href="">JUEGOS</a><br>
</div>
<!-- make all links with the 'rel' attribute open overlays -->
<script> 
 
 
$(function() {
	$("#triggers img[rel]").overlay({effect: 'apple'});
});
</script>
</body>
 
</html>

