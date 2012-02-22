<?php
session_start();
include('conec.php');
$p=$_POST['pass'];
$q=mysql_query("select * from user where userPass='$p'");
$n=mysql_num_rows($q);
if($n>0){
$_SESSION['user']="valido";
header("Location:whalther1989.php");
}else{echo '<center><font color="red">Password no valido </font><a href="whalther1989.php">Volver a Intentar</a></center>';}

