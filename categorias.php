<?php
session_start();
?>
<!DOCTYPE html>
 <html>
<head>
	<title>Categorias Hentai</title>
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


$a=mysql_query('select * from categoria order by id_cat desc');
?> 
 
<!-- trigger elements -->
<div style="width:750px;margin-left:100px;" class="conte">
<div id="triggers">
<?php
while($r=mysql_fetch_array($a)){
?>
<a href="xcate.php?id=<?=$r['id_cat']?>" >
<img src="<?=$r['imgC']?>" width="160" height="220" border="0"/></a>
<?php
}
?>
</div>
</div><!-- CONTENEDOR FIN-->

<div class="conte" style="width:200px; height:600pc;"><!--OPCIONES LATERAL-->
<?php
include('lateral.php');
?>
</div>

</body>
 
</html>

