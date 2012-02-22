<?php
include('conec.php');
$titu=$_POST['titu'];
$des=$_POST['des'];
$img=$_POST['img'];
$cat=$_POST['cat'];
$ser=$_POST['ser'];
$id=$_POST['idioma'];
$links=$_POST['links'];
$online=$_POST['linksOn'];
$pass=$_POST['pass'];
$ih=$_POST['idh'];
$tags=$_POST['tags'];
if(mysql_query("update cont set titulo='$titu',des='$des',id_servidor=$ser,img='$img',id_cat=$cat,id_idioma=$id,links='$links',online='$online',pass='$pass',tags='$tags' where id_ht=".$ih))
{
header("Location:whalther1989.php?exito");
}else{
echo 'ERROR DESCONOCIDO';}

//echo "update cont set titulo='$titu',des='$des',id_servidor=$ser,img='$img',id_cat=$cat,id_idioma=$id,links='$links',online='$online' where id_ht=".$ih;



?>