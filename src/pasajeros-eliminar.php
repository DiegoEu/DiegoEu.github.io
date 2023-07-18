<?php
include_once './ViajesUtil.php';
$obj=new ViajesUtil();
$rutcod = $_REQUEST['rutcod'];
$vianro = $_REQUEST['vianro'];
$obj->anula($_REQUEST['bolnro']);
header("Location:../src/viajes-pasajeros.php?rutcod=$rutcod&vianro=$vianro");
?>
