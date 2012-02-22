<?php
include('conec.php');
$cat=mysql_query("select * from categoria order by name_c asc");
?>
<script type="text/javascript">
function xcate(){
var ca=document.getElementById('cate').value;
document.location="xcate.php?id="+ca;
}
function validar(frm){
if(frm.correo.value.length<3){
alert("Escribe tu correo, para recibir enlaces alas nuevas series que se incorporen a la pagina");
return false;}
}
</script>
Categoria:<br>
<select name="categoria" onChange="xcate()" id="cate">
<option value=""></option>
<option value="0">Todas</option>
<?php
while($r=mysql_fetch_array($cat)){
echo '<option value="'.$r['id_cat'].'">'.$r['name_c'].'</option>';
}
?>
</select><br>
<form action="suscritos.php" method="post" onsubmit="return validar(this)">
<?php
if(isset($_GET['sus34ww-42s'])){
echo '<font color="#0099FF">Noticias de nuevas Series Hentai ser&aacute;n enviadas a tu Correo</font><br>';
}
?>
Suscribete<br>
<input type="text" name="correo">
<input type="submit" value="Suscribete"></form><br>
<font color="#0099FF"><b>Hentai</b></font><br>
<a href="doujinGale.php">DOUJINS</a><br>
