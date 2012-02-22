<?php
session_start();
?>
<!DOCTYPE html>
 <html>
<head>
	<title>Hentai en Mediafire y otros</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> <!--PARA PROBLEMAS CON LA  Y TILDES COLOCAR EN CADA PAGINA-->
	<!-- standalone page styling (can be removed) -->
    <meta name=”keywords” content=”hentai en español, mediafire, incesto, porno, naruto, doujin, hentai online, sub español,
    pocos link, recopilacion, megaupload” />
<meta name=”description” content=”Series Hentai la mayoria en Mediafire ” />
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
#tooltip{
    position:absolute;
    border:1px solid #333;
    background:white;
    padding:2px 5px;
    color:#333;
    display:none;
	width:320px;
    }
	</style>
<script src="jquery.js" type="text/javascript"></script>
<script src="main.js" type="text/javascript"></script> 
</head>
 
<body>
<?php include('menu.php');


$_pagi_sql='select * from cont,idiomas,servidor,categoria where cont.id_idioma=idiomas.id_idioma and cont.id_servidor=servidor.id_servidor and cont.id_cat=categoria.id_cat order by id_ht desc';
$_pagi_cuantos = 12;
include('funcio/paginator.inic.php');
?> 
 
<!-- trigger elements -->
<div style="width:750px;margin-left:100px;" class="conte">
<div id="triggers">
<?php
$n=1;
while($r=mysql_fetch_array($_pagi_result)){
if($r['online']==''){
$line='no';
}else{$line='si';}
?>
<a href="online.php?id=<?=$r['id_ht']?>&online=<?=$line?>" class="tooltip" title="
<b>Titulo: </b><?=$r['titulo']?><br>
<b>Descripci&oacute;n:</b><br><?=$r['des']?>
<br>
<b>Idioma:</b> <?=$r['idioma']?>
<br><b>Servidor:</b> <?=$r['name_s']?>
<br><b>Online:</b> <?=$line?>
">
<img src="<?=$r['thum']?>" width="160" height="220" rel="#photo<?=$n?>" border="0"/></a>
<?php
$n++;
}
?><br>
 <?php echo $_pagi_navegacion;?>
</div>
</div><!-- CONTENEDOR FIN-->

<div class="conte" style="width:200px; height:600pc;"><!--OPCIONES LATERAL-->
<?php
include('lateral.php');
?>
</div>

</body>
 
</html>

