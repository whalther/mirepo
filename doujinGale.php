<?php
session_start();
?>
<!DOCTYPE html>
 <html>
<head>
	<title>Doujin</title>
	<!-- standalone page styling (can be removed) -->
	<link rel="stylesheet" type="text/css" href="css/categorias/standalone.css"/>	
	<link rel="stylesheet" type="text/css" href="css/categorias/overlay-apple.css"/>
	<style>
	
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


$_pagi_sql='select * from doujin';
$_pagi_cuantos = 12;
include('funcio/paginator.inic.php');
?> 
 <!-- trigger elements -->
<div style="width:750px;margin-left:100px;" class="conte">
<center><font color="#0099FF"><b>DOUJINS</b></font></center>
<div id="triggers">
<?php
while($r=mysql_fetch_array($_pagi_result)){
?>
<a href="doujinInfo.php?id=<?=$r['id_dou']?>" class="tooltip" title="<b>Descripci&oacute;n:</b><br><?=$r['des_d']?>

">
<img src="<?=$r['img_d']?>" width="160" height="220" border="0"/></a>
<?php
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

