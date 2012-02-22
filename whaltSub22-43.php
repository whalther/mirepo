<?php
include('conec.php');
$titu=$_POST['titu'];
$des=$_POST['des'];
$t_dir=$_FILES['thu']['tmp_name'];
$t_n=$_FILES['thu']['name'];
$t_ti=$_FILES['thu']['type'];
$img=$_POST['imagen'];
$cat=$_POST['cat'];
$ser=$_POST['ser'];
$id=$_POST['idioma'];
$links=$_POST['links'];
$linksOn=$_POST['linksOn'];
$pass=$_POST['pass'];
$tags=$_POST['tags'];
$thum='thum/'.$t_n;
move_uploaded_file($_FILES['thu']['tmp_name'],'thum/'.$_FILES['thu']['name']);


if(mysql_query("insert into cont(titulo,des,id_servidor,img,thum,id_cat,iduser,id_idioma,links,online,pass,tags)values('$titu','$des',$ser,'$imagen','$thum',$cat,1,$id,'$links','$linksOn','$pass','$tags')"))
{
header("Location:whalther1989.php?exito");
}




?>