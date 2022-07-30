<?php
error_reporting(E_ERROR | E_PARSE);
session_start(); 
$_SESSION["estado"];

if($_SESSION["estado"]=='empleado') {
    echo "<script> document.getElementById('signin').style.display='block'; </script>";
    echo "<script> document.getElementById('signin2').style.display='none'; </script>";
}
elseif($_SESSION["estado"]=='empleador'){
    echo "<script> document.getElementById('signin2').style.display='block'; </script>";
    echo "<script> document.getElementById('signin').style.display='none'; </script>";
}
else{
	echo "<script> document.getElementById('signin').style.display='none'; </script>";
    echo "<script> document.getElementById('signin2').style.display='none'; </script>";
}
?>