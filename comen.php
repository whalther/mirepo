<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comentarios y Sugerencias</title>
</head>

<body>
<?php include('menu.php');
if(isset($_GET['enviado'])){
echo'<center><h4><font color="#0099FF">T&uacute; Comentario o sugerencia se ha enviado Gracias!</font></h4></center>';
}
?>
<div style="margin-left:300px;">
<font color="#999999">T&uacute; Cometario o Sugerencia nos ayudara a mejorar.</font><br />
<form method="post" action="coment.php">
<textarea cols="30" rows="7" name="comenta"></textarea><br />
<input type="submit" value="Enviar" />
</form>
</div>
</body>
</html>
